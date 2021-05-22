<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Photo;
use App\Post;
use App\Rating;
use App\Traffic;
use App\Viewer;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::latest()->get();
        return view('post.index',compact('posts'));
    }
    public function showRating($id){
        $post=Post::where('id',$id)->get();
        return view('rating.show',compact('post'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request;
        $request->validate([
            "name" => "required",
            "type" => "required",
            "logo" => "required",
            "category_id" => "required|numeric",
            "updated" => "required",
            "size" => "required",
            "version" => "required",
            "requirement" => "required",
            "developer" => "required",
            "features" => "required",
            "link1" => "required",
            "description" => "required",
//            "images.*" => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $post=new Post();
        $post->name=$request->name;
        $post->type=$request->type;
        $post->category_id=$request->category_id;
        $post->updated=$request->updated;
        $post->size=$request->size;
        $post->version=$request->version;
        $post->requirement=$request->requirement;
        $post->developer=$request->developer;
        $post->features=$request->features;
        $post->video=$request->video;
        $post->link1=$request->link1;
        $post->description=$request->description;
        if ($request->link2){
            $post->link2=$request->link2;
        }
        if ($request->link3){
            $post->link3=$request->link3;
        }
        if ($request->hasFile('logo')){
            $dir="public/logo";
            $newName = uniqid()."_logo.".$request->file("logo")->getClientOriginalExtension();
            $request->file("logo")->storeAs($dir,$newName);

            $image_resize = Image::make(public_path()."/storage/logo/".$newName);
            $image_resize->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('storage/thumbnail/' .$newName));
//            return $image_resize->response('png');


            $post->logo = $newName;
        }
        $post->save();

        if ($request->hasFile('images')){
            $dir="public/post";
            foreach($request->file('images') as $image)
            {
                $newName = uniqid()."_post.".$image->getClientOriginalExtension();
                $image->storeAs($dir,$newName);

                $image_resize = Image::make(public_path()."/storage/post/".$newName);
                $image_resize->resize(310, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $image_resize->save(public_path('storage/thumbnail/' .$newName));

                $photo=new Photo();
                $photo->name=$newName;
                $aa=Post::get()->last();
                $photo->post_id=$aa->id;
                $photo->save();
            }
//            return 'success';

        }
        return redirect()->route("post.create")->with("toast","Game Add Successful");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            "name" => "required",
            "type" => "required",
//            "logo" => "required",
            "category_id" => "required|numeric",
            "updated" => "required",
            "size" => "required",
            "version" => "required",
            "requirement" => "required",
            "developer" => "required",
            "features" => "required",
            "link1" => "required",
            "description" => "required",
//            "images.*" => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $post->name=$request->name;
        $post->type=$request->type;
        $post->category_id=$request->category_id;
        $post->updated=$request->updated;
        $post->size=$request->size;
        $post->version=$request->version;
        $post->requirement=$request->requirement;
        $post->developer=$request->developer;
        $post->features=$request->features;
        $post->video=$request->video;
        $post->link1=$request->link1;
        $post->description=$request->description;
        if ($request->link2){
            $post->link2=$request->link2;
        }
        if ($request->link3){
            $post->link3=$request->link3;
        }
        if ($request->hasFile('logo')){
            $dir="public/logo";
            $newName = uniqid()."_logo.".$request->file("logo")->getClientOriginalExtension();
            $request->file("logo")->storeAs($dir,$newName);

            $image_resize = Image::make(public_path()."/storage/logo/".$newName);
            $image_resize->resize(100, 100);
            $image_resize->save(public_path('storage/thumbnail/' .$newName));
            $post->logo = $newName;
        }
        $post->update();

        return redirect()->route("post.index")->with("toast","Game Update Successful");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $old=Photo::where('post_id',$post->id)->get();
        foreach ($old as $o){
            unlink(storage_path('/app/public/post/'.$o->name));
            unlink(storage_path('/app/public/thumbnail/'.$o->name));
        }
        Photo::where('post_id',$post->id)->delete();
        Rating::where('post_id',$post->id)->delete();
        Comment::where('post_id',$post->id)->delete();
        $post->delete();
        return redirect()->route("post.index")->with("toast","Game Delete Successful");
    }
}
