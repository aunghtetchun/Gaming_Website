@extends('dashboard.app')

@section("title") Edit Game @endsection

@section('content')

    @component("component.breadcrumb",["data"=>[
        "Game" => route("post.index"),
    ]])
        @slot("last") Edit Game @endslot
    @endcomponent

    <div class="row">
        <div class="col-12 col-xl-10">
            @component("component.card")
                @slot('icon') <i class="feather-file text-primary"></i> @endslot
                @slot('title') Edit Game @endslot
                @slot('button')
                    <a href="{{ route('post.index') }}" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-list fa-fw"></i>
                    </a>
                @endslot
                @slot('body')
                    <div>
                        <form action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Game Name</label>
                                    <input required type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ $post->name }}" placeholder="Game Name">
                                    @error('name')
                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="logo">Game Logo</label>
                                    <input type="file" accept="image/png, .jpeg, .jpg, image/gif" class="form-control p-1 @error('logo') is-invalid @enderror" name="logo" id="logo" value="{{ $post->logo }}" placeholder="Game Logo">
                                    @error('logo')
                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="type">Game Type</label>
                                    <input required type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" value="{{ $post->type }}" placeholder="Game Type">
                                    @error('type')
                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="category_id">Category</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option selected disabled>Select Category</option>
                                        @foreach(\App\Category::latest()->get() as $c)
                                            <option value="{{ $c->id }}" {{ $post->category_id == $c->id ? "selected":"" }} >{{ $c->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="updated">Updated</label>
                                    <input required type="text" class="form-control @error('updated') is-invalid @enderror" name="updated" id="updated" value="{{ $post->updated }}" placeholder="Updated">
                                    @error('updated')
                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="size">Size</label>
                                    <input required type="text" class="form-control @error('size') is-invalid @enderror" name="size" id="size" value="{{ $post->size }}" placeholder="Size">
                                    @error('size')
                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="version">Version</label>
                                    <input required type="text" class="form-control @error('version') is-invalid @enderror" name="version" id="version" value="{{ $post->version }}" placeholder="Version">
                                    @error('version')
                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="requirement">Requirement</label>
                                    <input required type="text" class="form-control @error('requirement') is-invalid @enderror" name="requirement" id="requirement" value="{{ $post->requirement }}" placeholder="Requirement">
                                    @error('requirement')
                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="developer">Developer Company</label>
                                    <input required type="text" class="form-control @error('developer') is-invalid @enderror" name="developer" id="developer" value="{{ $post->developer }}" placeholder="Developer Company">
                                    @error('developer')
                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="video">Gameplay Video</label>
                                    <input required type="text" class="form-control @error('video') is-invalid @enderror" name="video" id="video" value="{{ $post->video }}" placeholder="Gameplay Video">
                                    @error('video')
                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="link1">Link One</label>
                                    <input required type="text" class="form-control @error('link1') is-invalid @enderror" name="link1" id="link1" value="{{ $post->link1 }}" placeholder="Link One">
                                    @error('link1')
                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="link2">Link Two</label>
                                    <input type="text" class="form-control @error('link2') is-invalid @enderror" name="link2" id="link2" value="{{ $post->link2 }}" placeholder="Link Two">
                                    @error('link2')
                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="link3">Link Three</label>
                                    <input type="text" class="form-control @error('link3') is-invalid @enderror" name="link3" id="link3" value="{{ $post->link3 }}" placeholder="Link Three">
                                    @error('link3')
                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6"></div>
                                <div class="form-group col-md-6">
                                    <label for="features">Mod Features</label>
                                    <textarea required class="form-control @error('features') is-invalid @enderror" name="features"  id="features">{!! $post->features !!}</textarea>
                                    @error('features')
                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="description">Description</label>
                                    <textarea required class="form-control @error('description') is-invalid @enderror" name="description"  id="description">{!! $post->description !!}</textarea>
                                    @error('description')
                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary " ><i class="fas fa-plus-square mr-1"></i> Update Game</button>
                        </form>
                    </div>
                @endslot
            @endcomponent
        </div>
        <div class="col-12 col-md-6">
            @component("component.card")
                @slot('icon') <i class="feather-file text-primary"></i> @endslot
                @slot('title') Gameplay Photo @endslot
                @slot('button')

                @endslot
                @slot('body')
                    <form action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-inline">
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <input type="file"   multiple class=" mt-2 form-control p-1 mr-2 @error('images') is-invalid @enderror" accept="image/png, .jpeg, .jpg, image/gif" name="images[]" id="images" value="" >
                            <button type="submit" class="btn mt-2 btn-primary" >Upload</button>
                            @error('images')
                            <small class="invalid-feedback font-weight-bold" role="alert">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                    </form>
                    <div class="d-flex my-2" style="overflow-x: scroll;" >
                        @foreach($post->getPhoto as $photo)
                            <div class="my-3"  >
                                <div class="mr-2">
                                    <img src="{{ asset("/storage/thumbnail/".$photo->name) }}" alt="" style="height: 100px">
                                    <form action="{{ route('photo.destroy',$photo->id) }}"  method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button href="" class="btn mt-1 btn-sm btn-outline-danger text-left">
                                            <i class="feather-trash-2"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
@section('foot')
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                height: 200,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true
            });
            $('#features').summernote({
                height: 200,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true
            });
        });
    </script>
@endsection
