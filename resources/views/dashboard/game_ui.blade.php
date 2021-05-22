
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Primary Meta Tags -->
{{--    <title>Game & Software Zone Myanmar</title>--}}
    <meta name="title" content="Game & Software Zone Myanmar gsmm myanmar aunghtetchon">
    <meta name="description" content="welcome from game and software zone myanmar gsmm mod game game mode gsmm myanmar gsmm aunghtetchon ">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website,games website, mod games website, gsmm myanmar, aunghtetchon">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('meta_title','Game and Software Zone Myanmar gsmm myanmar aunghtetchon')">
    <meta property="og:description" content="@yield('meta_description','welcome from game and software zone myanmar gsmm mod game game mode gsmm myanmar aunghtetchon')">
    <meta property="og:image" content="@yield('meta_image', asset(\App\Custom::$info['c-logo']) )">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Game & Software Zone Myanmar">
    <meta property="twitter:description" content="welcome from game and software zone myanmar gsmm mod game game mode">
    <meta property="twitter:image" content="{{ asset(\App\Custom::$info['c-logo']) }}">
    <meta name="viewport" content="width=device-width, wedding-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script data-ad-client="ca-pub-7033127449382003" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset(\App\Custom::$info['c-logo']) }}">
    <link rel="stylesheet" href="{{ asset(\App\Custom::$info['main_css']) }}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/feather-icons-web/feather.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/font-awesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/animate_it/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/summernote/summernote.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/data_table/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/game_ui.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/venobox/venobox.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">

    @yield('head')

</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=330373441560462&autoLogAppEvents=1" nonce="ainGSV4C"></script>
<div class="container-fluid" style="background:  #f7efe9">
    <div class="row">
{{--        <div class="se-pre-con"></div>--}}
        <div class="col-12 p-0 position-sticky" style=" top: 0; z-index: 16; background: #0d0d0d">
            <div class="container ">
                <div class="row">
                    <div class="col-12 p-0 py-2 ">
                        <nav>
                            <input type="checkbox" id="check">
                            <label for="check" class="checkbtn">
                                <i class="feather-menu"></i>
                            </label>
                            <label class="logo px-0" onclick="location.href='{{route('game.gameList')}}'"  style="cursor: pointer">
                                <img src="{{ asset(\App\Custom::$info['c-logo']) }}"  style="width: 70px">
                            </label>
                            <span class="h3 pl-2 text-white gsmm" onclick="location.href='{{route('game.gameList')}}'"  style="cursor: pointer">Game & Software MM</span>
                            <ul class="menulist ">
                                <li ><a class="link"  href="{{ asset('/') }}">Home</a></li>
                                <li class=" dropdown" style="line-height: 37px">
                                    <a class=" dropdown-toggle" href="{{ route('game.gameList') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Games
                                    </a>
                                    <div class="dropdown-menu py-0" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item border rounded-0" href="{{ route('game.gameList') }}" >All</a>
                                        @foreach(\App\Category::all() as $cat)
                                            <a class="dropdown-item py-0 py-0 border rounded-0" href="{{ route('game.gameList-filter',$cat->id) }}">{{ $cat->title }}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li ><a class="link " href="#">Software</a></li>
                                <li ><a class="link " href="{{ route('requestGame.createRequest') }}">Request Game</a></li>
                                <li ><a class="link" href="{{ route('suggestGame.createSuggest') }}">Suggest Website</a></li>
                                <li ><a class="link" href="{{ route('adGame.createAd') }}">Ad Service</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
        <div class="fb-quote"></div>
        @yield('download')
        <div class="content_body col-12 p-0">
            @yield("content")

            <div class="my-2">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- nav footer -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-7033127449382003"
                     data-ad-slot="2494037875"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>

{{--            <div class="container py-3 my-5 d-flex flex-wrap justify-content-center" style="background: rgba(11,15,18,0.6); ">--}}
{{--                <div class="col-12 col-md-6">--}}
{{--                    <h5 class="col-12 p-0 mt-3 mb-4 text-white">OUR FACEBOOK GROUP</h5>--}}
{{--                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D100502875358429%26id%3D100490335359683&width=500&show_text=true&height=311&appId" width="100%" height="311" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-6">--}}
{{--                    <h5 class="col-12 p-0 mt-3 mb-4 text-white"> OUR FACEBOOK PAGE</h5>--}}
{{--                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D100494468692603%26id%3D100490335359683&width=500&show_text=true&height=311&appId" width="100%" height="311" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="footer text-dark text-center pb-3 py-3 font-weight-bolder " style="background-color: rgba(255,255,255,0.8); line-height: 30px">
            <span class="px-3">Copyright ©2021 All rights reserved | This Website is Created  by <a href="https://www.facebook.com/profile.php?id=100059336683324">Aung Htet Chon</a>
            </span>
            </div>
        </div>

    </div>
</div>


<!-- Scripts -->
<script src="{{ asset('dashboard/js/jquery.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{ asset('dashboard/js/bootstrap.js') }}"></script>

<script src="{{ asset('dashboard/vendor/data_table/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/data_table/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('dashboard/js/app.js') }}"></script>
<script src="{{ asset('dashboard/vendor/summernote/summernote.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/venobox/venobox.js') }}"></script>
<script src="{{ asset('dashboard/vendor/slick/slick.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/font-awesome/js/all.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>


<script>
    $(window).load(function() {
// Animate loader off screen
        $(".se-pre-con").fadeOut(500);
    });
    $(document).ready(function(){
        $('.venobox').venobox({                      // default: ''
            frameheight: '600px',                            // default: ''
            bgcolor    : '#5dff5e',                          // default: '#fff'
            titleattr  : 'data-title',                       // default: 'title'
            numeratio  : true,                               // default: false
            infinigall : true,                               // default: false
        });
    });
</script>
@yield('foot')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FZZJSZC059"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-FZZJSZC059');
</script>
</body>
</html>
