
{{--@extends('dashboard.game_ui')--}}

{{--@section("title") Game & Software Zone Myanmar @endsection--}}

{{--@section('download')--}}



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
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Game & Software Zone Myanmar">
    <meta property="twitter:description" content="welcome from game and software zone myanmar gsmm mod game game mode">
{{--    <meta property="twitter:image" content="{{ asset(\App\Custom::$info['c-logo']) }}">--}}
    <meta name="viewport" content="width=device-width, wedding-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script data-ad-client="ca-pub-7033127449382003" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset(\App\Custom::$info['main_css']) }}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/feather-icons-web/feather.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/game_ui.css') }}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/font-awesome/css/fontawesome.min.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">

    @yield('head')

</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=330373441560462&autoLogAppEvents=1" nonce="ainGSV4C"></script>
<div class="container-fluid" style="background:  #f7efe9">
    <div class="row">
        <div class="container-fluid bg-light pt-3  ">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-10 d-flex flex-wrap justify-content-center text-center text-dark align-items-center">
                    <h5 class="col-12 mb-4 text-danger"> <i class="feather-arrow-down"></i> Scroll Down To Bottom <i class="feather-arrow-down"></i></h5>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- game download one -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-7033127449382003"
                         data-ad-slot="8798773539"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- game download two -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-7033127449382003"
                         data-ad-slot="5981038503"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- game download three -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-7033127449382003"
                         data-ad-slot="4824687743"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    <div class="col-12 text-center text-dark h4">
                        <span id="countdown">Please Wait 13 Seconds</span>
                    </div>
                    <div class="col-12 text-center" id="thanks">
                        {{--                <h5 class="col-12 mb-4">ကျေးဇူးပြု၍ ခေတ္တစောင့်ဆိုင်းပေးပါခင်ဗျာ</h5>--}}
                        <h6 class="col-12 mt-3" style="line-height: 45px"> Thanks For Using My Website</h6>
                    </div>
                    <div class="col-12 text-center mb-3" id="finish" style="display: none;">
                        <h5 class="col-12 mb-4" style="line-height: 45px">You Can Download Game Now Thanks For Using My Website</h5>
                        <h5 class="col-12 mb-4" style="line-height: 45px" >If You Have Any Problem Comment in post or contact to page chatbox</h5>
                    </div>
                    <div class="col-12 col-md-4 " id="download_link1" style="display: none;">
                        <a href="{{ $link1 }}" target="_blank" class="btn btn-block btn-primary mb-2"><i class="feather-arrow-down"></i> Download Apk</a>
                    </div>
                    @isset($link2)
                        <div class="col-12 col-md-4 " id="download_link2" style="display: none;">
                            <a href="{{ $link2 }}" target="_blank" class="btn btn-block btn-success mb-2"><i class="feather-arrow-down"></i> Download Obb or Other</a>
                        </div>
                    @endisset
                    @isset($link3)
                        <div class="row justify-content-center">
                            <div class=" fb-share-button" data-href="{{ $link3 }}" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgameandsoftwaremm.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share To Facebook </a></div>
                        </div>
{{--                        <div class="col-12 col-md-4 " id="download_link3" style="display: none;">--}}
{{--                            <a href="{{ $link3 }}" target="_blank" class="btn btn-block btn-danger mb-2"><i class="feather-arrow-down"></i> Download Additional</a>--}}
{{--                        </div>--}}
                    @endisset
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- game download four -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-7033127449382003"
                         data-ad-slot="9868312622"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- game download five -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-7033127449382003"
                         data-ad-slot="5737495929"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Scripts -->
{{--<script src="{{ asset('dashboard/js/jquery.js') }}"></script>--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{ asset('dashboard/js/bootstrap.js') }}"></script>
<script src="{{ asset('dashboard/vendor/font-awesome/js/all.min.js') }}"></script>


<noscript>JavaScript needs to be enabled in order to be able to download.</noscript>
<script type="application/javascript">
    (function(){
        var message = "%d seconds before download link appears";
        var count = 18;
        var countdown_element = document.getElementById("countdown");
        var download_link1 = document.getElementById("download_link1");
        var download_link2 = document.getElementById("download_link2");
        var download_link3 = document.getElementById("download_link3");
        var thanks = document.getElementById("thanks");
        var finish = document.getElementById("finish");
        var timer = setInterval(function(){
            if (count) {
                countdown_element.innerHTML = "Please Wait %d Seconds".replace("%d", count);
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
</script>
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

{{--@endsection--}}
{{--@section('foot')--}}

{{--@endsection--}}









