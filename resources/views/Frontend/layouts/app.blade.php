<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- ================================= --}}


    {{-- {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    {!! SEO::generate() !!}
    {!! SEO::generate(true) !!} --}}
    {!! app('seotools')->generate() !!}

    {{-- ================================= --}}



    <link href="{{ asset('Frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/css/popup.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('Frontend/css/carousel.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    @yield('head')

    <style>
        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
            margin: auto;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            position: fixed;
            display: none;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

    </style>
    <style>
        .error {
            color: red;
            font-size: 11px;
            margin: 0px;
        }

    </style>

</head>


<body class="home">

    <div class="loader"></div>

    @include('Frontend.layouts.header')
    @include('Frontend.layouts.header-slider')
    @yield('content')
    @include('Frontend.layouts.footer')

    @if (session('ServerError'))
        <div class="modal fade" id="ServerError" style="margin: 0px;" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="alert alert-danger">{{ session('ServerError') }}</div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (session('message'))
        <div class="modal fade" id="message" style="margin: 0px;" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        @include('Backend.layouts.message')
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- @include('Frontend.modals.all-modals') --}}

    @if (Auth::user())
        @if (Auth::user()->isUserLoggedIn())
            @include('Frontend.modals.myAccount')
            @include('Frontend.modals.credit')
            @include('Frontend.modals.delete')
            @include('Frontend.modals.details')
            @include('Frontend.modals.getVerified')
            @include('Frontend.modals.privacy')
            @include('Frontend.modals.adminAbuse')
            @include('Frontend.modals.myMessage')
            @include('Frontend.modals.myPosts')
            @include('Frontend.modals.myFavourites')
            @include('Frontend.modals.postItem')
            @include('Frontend.modals.postMessage')
            @include('Frontend.modals.postHousemate')
            @include('Frontend.modals.postProfessional')
            @include('Frontend.modals.postProject')
            @include('Frontend.modals.postProperty')
            @include('Frontend.modals.emailConfirm')
            @include('Frontend.modals.rateMe')
        @endif

    @else
        @include('Frontend.modals.signIn')
        @include('Frontend.modals.signUp')
    @endif

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".new_update_slider", {
            slidesPerView: 5,
            spaceBetween: 10,
            slidesPerGroup: 1,
            loop: false,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: "#swiper-button-next-news",
                prevEl: "#swiper-button-prev-news",
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".home_page_slider", {
            slidesPerView: 3,
            spaceBetween: 20,
            slidesPerGroup: 1,
            loop: false,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            slidesPerGroup: 1,
            loop: false,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".newestswiper", {
            slidesPerView: 5,
            spaceBetween: 10,
            slidesPerGroup: 1,
            loop: false,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        var modalSwiper = {
            initialize: function() {

                new Swiper(".modalSwiper", {
                    loop: true,
                    pagination: {
                        el: ".swiper-pagination",
                        type: "fraction",
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            }
        };
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyCZf3_pkkppQ2yhnjB2Tb9NapQzZV1CVcg&libraries=places"></script>

    <script>
        function AddReadMore() {
            //This limit you can set after how much characters you want to show Read More.
            var carLmt = 400;
            // Text to show when text is collapsed
            var readMoreTxt = "  Read More";
            // Text to show when text is expanded
            var readLessTxt = " Read Less";


            //Traverse all selectors with this class and manupulate HTML part to show Read More
            $(".addReadMore").each(function() {
                if ($(this).find(".firstSec").length)
                    return;

                var allstr = $(this).text();
                if (allstr.length > carLmt) {
                    var firstSet = allstr.substring(0, carLmt);
                    var secdHalf = allstr.substring(carLmt, allstr.length);
                    var strtoadd = firstSet + "<span class='SecSec'>" + secdHalf +
                        "</span><span class='readMore'  title='Click to Show More'>" + readMoreTxt +
                        "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
                    $(this).html(strtoadd);
                }

            });
            //Read More and Read Less Click Event binding
            $(document).on("click", ".readMore,.readLess", function() {
                $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
            });
        }
        $(function() {
            //Calling function after Page Load
            AddReadMore();
        });
    </script>

    <script
        src="https://www.paypal.com/sdk/js?client-id=AYARVb6iHq1nmQgiUqe91Jmf_Q53-8QlwA6fc0N3VDAU6oW08VCh4MIJ3bSLq95izIov_8tMPSPbGufs&disable-funding=credit">
    </script>

    <script>
        var Auth = false;
    </script>

    @if (Auth::user())
        <script>
            Auth = true;
        </script>
    @endif

    <!-- helper.js created by shahbaz raza -->
    <script src="{{ asset('js/helper.js') }}"></script>
    <!-- app.js created by Usama Amjad -->
    <script src="{{ asset('Frontend/js/app.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    @if (session('ServerError'))
        <script>
            $(document).ready(function() {
                $('#ServerError').modal('show');
            });
        </script>
    @endif

    @if (session('UserNotLogged'))
        <script>
            $(document).ready(function() {
                $('#welcome').modal('show');
            });
        </script>
    @endif

    @if (session('RegisterUser'))
        <script>
            $(document).ready(function() {
                $('#signup').modal('show');
            });
        </script>
    @endif

    @if (session('message'))
        <script>
            $(document).ready(function() {
                $('#message').modal('show');
            });
        </script>
    @endif
    <script>
        AOS.init();
    </script>

    @stack('script')


</body>

</html>
