
@extends('dashboard.game_ui')

@section('meta_title')
   gsmm {{ $game->name }} gsmm
@endsection

@section(('meta_description'))
    {{ $game->name  }}
    {{ $game->type }}
{{--    gsmm {{ $game->name }} gsmm--}}
    {{--    {{$game->description}}--}}
{{--    {{ $game->features  }}--}}
@endsection
@section('meta_image')
    {{ asset("/storage/thumbnail/".$game->logo) }}
@endsection
@section("title") Game & Software Zone Myanmar @endsection

@section('content')
    <div class="container  px-0 my-2">
{{--        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>--}}
{{--        <ins class="adsbygoogle"--}}
{{--             style="display:block"--}}
{{--             data-ad-format="fluid"--}}
{{--             data-ad-layout-key="-fb+5w+4e-db+86"--}}
{{--             data-ad-client="ca-pub-7033127449382003"--}}
{{--             data-ad-slot="9213177245"></ins>--}}
{{--        <script>--}}
{{--            (adsbygoogle = window.adsbygoogle || []).push({});--}}
{{--        </script>--}}

        <div class="col-12 pt-2 d-flex flex-wrap align-items-center" style="background: rgba(11,15,18,0.6); ">

            <form class="text-white w-100 mx-2 my-4" action="{{ route('game.gameSearch') }}" method="get" enctype="multipart/form-data">
                @csrf
                <div class="form-row align-items-end justify-content-center">
                    <div class="form-group col-md-5">
                        <label for="name" class="h5 mb-3">Search Game</label>
                        <input required type="text" class="form-control rounded-0 @error('name') is-invalid @enderror" name="name" id="name" value="{{old('name')}}" placeholder="Enter Game Name">
                    </div>
                    <div class="form-group col-md-2 text-left">
                        <button type="submit" class="btn rounded-0  btn-primary px-3 pb-2"> Search</button>
                    </div>
                </div>
            </form>

            <h3 class="col-12 mt-4 mb-2 text-center text-white " >{{ $game->name }} </h3>
            <h5 class="col-12 mt-1 mb-3 text-center  shadow-lg" >
                <a class="py-0 font-weight-bold text-danger" href="{{ route('game.gameList-filter',$game->getCategory->id) }}" style="text-decoration: none; cursor: pointer">( {{ $game->getCategory->title }} )</a>
            </h5>
            <div class="star text-center col-12 h4 my-2" data-toggle="modal" data-target="#exampleModal{{ $game->id }}">
                    @for($i=1; $i<=5; $i++)
                        @if($i<=floor(collect($game->getRating->pluck('rating'))->avg()) )
                            <i class="fas fa-star fa-fw"></i>
                        @else
                            <i class="far fa-star fa-fw"></i>
                        @endif
                    @endfor
                </div>
                <div class="d-flex col-12  flex-wrap px-1 justify-content-around ">
                    <div class="col-3 col-xs-12 col-md-2 px-1 my-3 border pt-1 border-light">
                        <img src="{{ asset("/storage/thumbnail/".$game->logo) }}" style="width: 100%;  margin-bottom: 5px;" alt="">
                        {{--                                Rating Modal start                            --}}
                        <div class="modal fade" id="exampleModal{{ $game->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModal{{ $game->id }}Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content text-center" style="background-color: #a81d1d !important;">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-white" id="exampleModal{{ $game->id }}Label">How much you like {{ $game->name }}?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" class="text-dark">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('addRating.storeRating') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-0">
                                                <div class="rating">
                                                    <label>
                                                        <input type="radio" name="rating" value="1" />
                                                        <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating" value="2" />
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating" value="3" />
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating" value="4" />
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating" value="5" />
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                    </label>
                                                </div>
                                                @error('rating')
                                                <small class="invalid-feedback font-weight-bold" role="alert">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                                <input type="hidden" value="{{$game->id}}" name="post_id">
                                            </div>
                                            <input type="hidden" value="{{$game->id}}" name="wedding_package_id">
                                            <button type="submit" class="btn text-white px-3 py-2 "  style="background-color: #080c0d;" ><i class="fas fa-plus-square mr-1"></i> Rating</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                                Rating Modal end                            --}}

                    </div>
                    <div class="col-9 col-md-10 my-3 px-1 pl-lg-5 pb-3 pt-1" style="border: 2px solid #ffffff; color: rgba(231,223,223,0.93)">
                        <div class="d-flex flex-wrap justify-content-center align-items-center">
                            <div class="col-6 px-0 col-md-4 col-lg-4">
                                <b class="font-weight-bolder" style="line-height: 41px"><a href="#" style="text-decoration: none; color: white;" >Company</a></b>
                                <p>{{ $game->developer }}</p>
                            </div>
                            <div class="col-6 px-0 col-md-4 col-lg-4">
                                <b class="font-weight-bolder" style="line-height: 41px">Last Updated</b>
                                <p>{{ $game->updated }}</p>
                            </div>
                            <div class="col-6 px-0 col-md-4 col-lg-4">
                                <b class="font-weight-bolder" style="line-height: 41px">Size</b>
                                <p>{{ $game->size }}</p>
                            </div>
                            <div class="col-6 px-0 col-md-4 col-lg-4">
                                <b class="font-weight-bolder" style="line-height: 41px">Version</b>
                                <p>{{ $game->version }}</p>
                            </div>
                            <div class="col-6 px-0 col-md-4 col-lg-4">
                                <b class="font-weight-bolder" style="line-height: 41px">Requirement</b>
                                <p>{{ $game->requirement }}</p>
                            </div>
                            <div class="col-6 px-0 col-md-4 col-lg-4">
                                <b class="font-weight-bolder" style="line-height: 41px">Type</b>
                                <p>{{ $game->type }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex flex-wrap g_img text-light px-0">
                    <h2 class="col-12 font-weight-bolder text-center my-4 ">Gameplay Photos</h2>

                    <div class="col-12 ">
                        <div class="all_photo">
                            @foreach($game->getPhoto as $photo)
                                <div class="px-lg-1 px-md-1 px-sm-0">
                                    <img class="w-100" src="{{ asset("/storage/thumbnail/".$photo->name) }}" alt="" >
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-12 text-center my-4 px-lg-4">
                        <h2 class="col-12 font-weight-bolder mt-4 mb-5">Gameplay Video</h2>
                        <iframe width="100%" height="480" src="{{ $game->video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 text-black-50 text-center" style="background-color: rgba(255,255,255,0.8);">
                        <h3 class="col-12 font-weight-bolder my-4 text-center">About Game</h3>
{{--                         - the continuation of the popular sports franchise that has won the recognition of players through a combination of gameplay mechanics. So you have to lities of a coach, owner, manager, economist and others. It is worth noting that this part has retained all the typical gaming solutions and the so beloved gameplay features at the same time acquired updated graphics created using the latest technologies, an improved physical model, modern AI, and a number of original game finds that will give the process of realism. It is worth noting that the economic model has also been redesigned, so now you have to spend the received funds more carefully.--}}
{{--                         this game you can become a real professional boxer and reach extraordinary heights.pportunity to create your character and give it an unusual look withpe. The game has several modes, which will allow you to first learn how to win and then go to the career mode and prove to everyone that you have no equal. As in the course of the game, you can pump out the characteristics of your fighter.--}}
                        {!! $game->description !!}
                    </div>
                    <div class="col-12 text-black-50 text-center" style="background-color: rgba(255,255,255,0.8);">
                        <h3 class="col-12 font-weight-bolder text-center my-3">Mod Features</h3>
{{--                        <h4 class="col-12 font-weight-bolder text-center my-4">Everyting Unlimited</h4>--}}
                        {!! $game->features !!}




                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-format="autorelaxed"
                             data-ad-client="ca-pub-7033127449382003"
                             data-ad-slot="4175561223"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>




                        <div class="col-12 p-0 d-flex flex-wrap my-3 justify-content-center" >
{{--                            <div class="col-12 col-md-4 ">--}}
{{--                                <a href="{{ route('game.download',$game->link1) }}" target="_blank" class="btn btn-block btn-primary mb-2"><i class="feather-arrow-down"></i> ဒေါင်းလုဒ် Apk</a>--}}
{{--                            </div>--}}
                            <div class="col-12 col-md-10 d-flex flex-wrap justify-content-center text-center text-dark align-items-center">
                                {{--                                <h5 class="col-12 mb-4 text-danger"> <i class="feather-arrow-down"></i> Scroll Down To Bottom <i class="feather-arrow-down"></i></h5>--}}

                                <div class="col-12 text-center font-weight-bold text-dark h4">
                                    <span id="countdown" style="line-height: 40px">Please Wait 15 စက္ကန့်</span>
                                </div>
                                <div class="col-12 text-center mt-2" id="thanks">
{{--                                    <h6 class="col-12 mb-3">ကျေးဇူးပြု၍ ခေတ္တစောင့်ဆိုင်းပေးပါခင်ဗျာ</h6>--}}
                                </div>
                                <div class="col-12 text-center mb-3" id="finish" style="display: none;">
{{--                                    <h5 class="col-12 mb-3 text-danger"  style="line-height: 30px" >If You Have Any Problem Comment in post or contact to page chatbox</h5>--}}
                                </div>
                                <div class="col-12 col-md-4 " id="download_link1" style="display: none;">
                                    <a href="{{ $game->link1 }}" target="_blank" class="btn btn-block btn-primary mb-2"><i class="feather-arrow-down"></i> Download Apk</a>
                                </div>
                                @isset($game->link2)
                                    <div class="col-12 col-md-4 " id="download_link2" style="display: none;">
                                        <a href="{{ $game->link2 }}" target="_blank" class="btn btn-block btn-success mb-2"><i class="feather-arrow-down"></i> Download Obb</a>
                                    </div>
                                @endisset

                            </div>
{{--                            <form class="text-white w-100" action="{{ route('game.download') }}" method="get" enctype="multipart/form-data">--}}
{{--                                @csrf--}}
{{--                                <div class="form-row align-items-end justify-content-center">--}}
{{--                                        <input required type="hidden" value="{{ $game->link1 }}"  name="link1" >--}}
{{--                                    @isset($game->link2)--}}
{{--                                        <input required type="hidden" value="{{ $game->link2 }}"  name="link2" >--}}
{{--                                    @endisset--}}
{{--                                    @isset($game->link3)--}}
{{--                                        <input required type="hidden" value="{{ $game->link3 }}"  name="link3" >--}}
{{--                                    @endisset--}}
{{--                                    <div class="form-group text-left">--}}
{{--                                        <button type="submit" class="btn  btn-primary px-4 py-2">Download Game</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </form>--}}

                        </div>



                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-format="autorelaxed"
                             data-ad-client="ca-pub-7033127449382003"
                             data-ad-slot="4993270136"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>


                        <h6 class="col-12 text-black-50 font-weight-bolder text-center"> {{ \App\Post::find($game->id)->getViewer()->count() }} Users Download This Game </h6>

{{--                        <a href="{{ route('requestGame.createRequest') }}" class="btn mt-4 mb-3 text-white-50 px-3 py-2" style="background-color: #a72727;">ဂိမ်းဒေါင်းမရတော့ပါကနှိပ်ရန်</a>--}}
{{--                        <h6 class="col-12 text-black-50 my-4 font-weight-bolder text-center">Share To Facebook</h6>--}}
                        <div class="row justify-content-center">
                            <div class=" fb-share-button" data-href="{{ $game->link3 }}" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgameandsoftwaremm.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share To Facebook </a></div>
                        </div>

                    </div>
                    <div class="col-12 text-center" style="background-color: rgba(255,255,255,0.8);">
                        <h2 class="col-12 font-weight-bolder text-black-50 text-center my-4">Comment</h2>
                        <ul class="list-group text-left col-12 p-0" >
                            @foreach(\App\Comment::where('post_id',$game->id)->latest()->limit(3)->get() as $cmt)
                            <li class="list-group-item w-100 mb-1" style="background-color: rgba(196,57,57,0.8) !important;">{{ $cmt->comment }}</li>
                            @endforeach
                        </ul>
                        <form class="text-light mt-2 pb-2" action="{{ route('commentGame.storeComment') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$game->id}}" name="post_id">
                            <div class="form-group">
                                <textarea required name="comment" id="comment" class="form-control @error('comment') is-invalid @enderror" name="comment" id=""  rows="2" >{{old('comment')}}</textarea>
                                @error('comment')
                                <small class="invalid-feedback font-weight-bold" role="alert">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-block form-control text-light py-2" style="background-color: #a81d1d" ><i class="fas fa-plus-square mr-1"></i> Comment</button>
                        </form>
                    </div>

                    <div class="col-12 text-black-50" style="background-color: rgba(255,255,255,0.8);">
                        <h2 class="col-12 font-weight-bolder text-center my-3">Similar Games</h2>
                        <div class="responsive">
                            @foreach(\App\Post::where('category_id',$game->category_id)->inRandomOrder()->limit(8)->get() as $similar)
                                <div class="card game_card mx-2 rounded-0" onclick="location.href='{{route('game.single-game-list',$similar->id)}}'" style="cursor: pointer;">
                                    <img class="card-img-top" src="{{ asset("/storage/thumbnail/".$similar->logo) }}" alt="Card image cap" style="width: 100%; height: 125px; padding: 13px;">
                                    <div class="card-body pt-1 pb-2" style="padding: 13px">
                                        <span class="card-title">{{\App\Custom::toShort($similar->name,15) }}</span>
                                        <p class="card-text text-muted">{{ $similar->developer }}</p>
                                    </div>
                                    <div class="card-footer px-0 text-center">
                                        <h6 class="text-center m-0 p-0 " style="font-size: 12px"><i class="feather-eye"></i> {{ \App\Viewer::where('post_id',$similar->id)->count() * 3 }}</h6>
                                        <small class="text-muted"> Version {{ $similar->version }} </small>
                                        <div class="star">
                                            @for($i=1; $i<=5; $i++)
                                                @if($i<=floor(collect($similar->getRating->pluck('rating'))->avg()) )
                                                    <i class="fas fa-star fa-fw"></i>
                                                @else
                                                    <i class="far fa-star fa-fw"></i>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>



{{--                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>--}}
{{--                        <!-- game view six -->--}}
{{--                        <ins class="adsbygoogle"--}}
{{--                             style="display:block"--}}
{{--                             data-ad-client="ca-pub-7033127449382003"--}}
{{--                             data-ad-slot="4468823891"--}}
{{--                             data-ad-format="auto"--}}
{{--                             data-full-width-responsive="true"></ins>--}}
{{--                        <script>--}}
{{--                            (adsbygoogle = window.adsbygoogle || []).push({});--}}
{{--                        </script>--}}



                    </div>
                </div>
        </div>
    </div>



@endsection
@section('foot')
    <script>
        (function(){
            var message = "%d seconds before download link appears";
            var count = 15;
            var countdown_element = document.getElementById("countdown");
            var download_link1 = document.getElementById("download_link1");
            var download_link2 = document.getElementById("download_link2");
            var download_link3 = document.getElementById("download_link3");
            var thanks = document.getElementById("thanks");
            var finish = document.getElementById("finish");
            var timer = setInterval(function(){
                if (count) {
                    countdown_element.innerHTML = "Please Wait %d စက္ကန့်".replace("%d", count);
                    count--;
                } else {
                    clearInterval(timer);
                    countdown_element.style.display = "none";
                    thanks.style.display="none";
                    finish.style.display='';
                    download_link1.style.display = "";
                    download_link2.style.display = "";
                    download_link3.style.display = "";
                }
            }, 1000);
        })();



        $('.responsive').slick({
            dots: true,
            infinite: true,
            speed: 300,
            arrows: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        $('.all_photo').slick({
            dots: true,
            infinite: true,
            speed: 400,
            arrows:false,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
@endsection



