@extends('Backend.layouts.app')
@section('content')

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    <style>
        #parent_div_1,
        #parent_div_2 {
            width: 49%;
            height: 200px;
            border: 1px solid blue;
            margin-right: 10px;
            float: left;
        }

    </style>
    @include('Backend.layouts.partials.breadcumb',['data' => ['Settings'],'button'=>['display' => false]])

    @include('Backend.layouts.message')
    <div class="container-fluid" style="min-height: 0;">
        <div class="card white-box">
            <div class="card-body">

                <div class="text-left">
                    <h3 class="text-themecolor">Header Content</h3>
                </div>
                <hr>
                <form action="{{ route('setting.updateLinks') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div id='parent_div_1'
                        style="background: url({{ $data['header_cover_image'] ?? '' }}); background-size: cover;">
                        <div class="input-group mb-3" style="margin: 6px;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i class="fas fa-video"></i>&nbsp;Cover
                                    Image</span>
                            </div>
                            <input type="file" class="form-control" name="header_cover_image" onchange="loadImage(event)"
                                style="background: transparent;
                                padding: 3px;" id="basic-url" aria-describedby="basic-addon3">
                            <div class="input-group-append">
                                <a href="{{ $data['header_cover_image'] ?? '' }}" id="new_image" target="_blank"
                                    class="btn btn-outline-link"><i class="fas fa-external-link-alt"></i> Preview</a>
                            </div>

                            <script>
                                var loadImage = function(event) {
                                    $('#parent_div_1').css('background', 'url(' + URL.createObjectURL(event.target.files[0]) + ')');
                                    $('#parent_div_1').css('background-size', 'cover');
                                    $('#new_image').attr('href', URL.createObjectURL(event.target.files[0]));
                                };
                            </script>
                        </div>
                    </div>

                    <style>
                        .video-container {
                            height: 300px;
                            width: 300px;
                            position: relative;
                        }

                        .video-container video {
                            width: 100%;
                            height: 100%;
                            position: absolute;
                            object-fit: cover;
                            z-index: 0;
                        }

                        /* Just styling the content of the div, the *magic* in the previous rules */
                        .video-container .caption {
                            z-index: 1;
                            position: relative;
                            text-align: center;
                            color: #dc0000;
                        }

                    </style>

                    <div id='parent_div_2' class="video-container"
                        style="background: url({{ $data['header_video'] ?? '' }}); background-size: cover;">

                        <video autoplay muted loop id="video">
                            <source id="source" src="{{ asset($data['header_video'] ?? '') }}" />
                        </video>
                        <div class="input-group mb-3 caption" style="margin: 6px;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i class="fas fa-video"></i>&nbsp;Cover
                                    Video</span>
                            </div>
                            <input type="file" class="form-control" name="header_video" onchange="loadvideo(event)" style="background: transparent;
                                padding: 3px;" id="basic-url" aria-describedby="basic-addon3" accept="video/mp4,video/x-m4v,video/*">
                            <div class="input-group-append">
                                <a href="{{ $data['header_video'] ?? '' }}" id="new_video" target="_blank"
                                    class="btn btn-outline-link"><i class="fas fa-external-link-alt"></i> Preview</a>
                            </div>

                            <script>
                                var loadvideo = function(event) {
                                    $('#video #source').attr('src', URL.createObjectURL(event.target.files[0]));
                                    $('#new_video').attr('href', URL.createObjectURL(event.target.files[0]));

                                };
                            </script>
                        </div>
                    </div>

                    <div class="row" style="float: right;">
                        <br>
                        <div class="col-md-12">
                            <button class="btn btn-success" style="    margin: 13px;" type="submit"> Update header </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card white-box">
            <div class="card-body">

                <div class="text-left">
                    <h3 class="text-themecolor">Web Content</h3>
                </div>
                <hr>



                <form action="{{ route('setting.updateLinks') }}" method="post">
                    @csrf
                    @method('patch')
                    <label for="basic-url">Basic Information</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3"><i
                                    class="far fa-envelope"></i>&nbsp;Email</span>
                        </div>
                        <input type="text" class="form-control" name="email" value="{{ $data['email'] ?? '' }}"
                            id="basic-url" aria-describedby="basic-addon3">

                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3"><i
                                    class="far fa-map"></i>&nbsp;Address</span>
                        </div>
                        <input type="text" class="form-control" name="address" value="{{ $data['address'] ?? '' }}"
                            id="basic-url" aria-describedby="basic-addon3">

                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3"><i class="fas fa-headset"></i>&nbsp;Contact
                                No</span>
                        </div>
                        <input type="text" class="form-control" name="contactNo" value="{{ $data['contactNo'] ?? '' }}"
                            id="basic-url" aria-describedby="basic-addon3">

                    </div>

                    <div class="row" style="float: right;">
                        <div class="col-md-12">
                            <button class="btn btn-success" type="submit"> Update Info </button>
                        </div>
                    </div>
                </form>
                <br><br>
                <hr>

                <form action="{{ route('setting.updateLinks') }}" method="post">
                    @csrf
                    @method('patch')
                    <label for="basic-url"> Web Urls</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3"><i
                                    class="fab fa-instagram"></i>&nbsp;Instagram</span>
                        </div>
                        <input type="text" class="form-control" name="instagram" value="{{ $data['instagram'] ?? '' }}"
                            id="basic-url" aria-describedby="basic-addon3">
                        <div class="input-group-append">
                            <a href="{{ $data['instagram'] ?? '' }}" target="_blank" class="btn btn-outline-link"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3"><i
                                    class="fab fa-facebook-square"></i>&nbsp;Facebook</span>
                        </div>
                        <input type="text" class="form-control" name="facebook" value="{{ $data['facebook'] ?? '' }}"
                            id="basic-url" aria-describedby="basic-addon3">
                        <div class="input-group-append">
                            <a href="{{ $data['facebook'] ?? '' }}" target="_blank" class="btn btn-outline-link"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3"><i
                                    class="fab fa-google"></i>&nbsp;Google</span>
                        </div>
                        <input type="text" class="form-control" name="google" value="{{ $data['google'] ?? '' }}"
                            id="basic-url" aria-describedby="basic-addon3">
                        <div class="input-group-append">
                            <a href="{{ $data['google'] ?? '' }}" target="_blank" class="btn btn-outline-link"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3"><i
                                    class="fab fa-twitter"></i>&nbsp;Twitter</span>
                        </div>
                        <input type="text" class="form-control" name="twitter" value="{{ $data['twitter'] ?? '' }}"
                            id="basic-url" aria-describedby="basic-addon3">
                        <div class="input-group-append">
                            <a href="{{ $data['twitter'] ?? '' }}" target="_blank" class="btn btn-outline-link"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>

                    <div class="row" style="float: right;">
                        <div class="col-md-12">
                            <button class="btn btn-success" type="submit"> Update Links </button>
                        </div>
                    </div>
                </form>
                <br><br>
                <hr>

                <form action="{{ route('setting.updateLinks') }}" method="post">
                    @csrf
                    @method('patch')

                    <label for="basic-url">Privacy and Policy</label>
                    <div>
                        <textarea name="privacy-policy" id="privacy-policy" cols="40" rows="10" name="">
                                            {!! $data['privacy-policy'] ?? '' !!}
                                        </textarea>

                        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                        <script>
                            CKEDITOR.replace('privacy-policy');
                        </script>
                    </div><br>
                    <div class="row" style="float: right;">
                        <div class="col-md-12">
                            <button class="btn btn-success" type="submit"> Update Privacy policy </button>
                        </div>
                    </div>
                </form>
                <br><br>
                <hr>

                <form action="{{ route('setting.updateLinks') }}" method="post">
                    @csrf
                    @method('patch')

                    <label for="basic-url">About Us</label>
                    <div>
                        <textarea name="about-us" id="about-us" cols="40" rows="10" name="">
                                            {!! $data['about-us'] ?? '' !!}
                                        </textarea>

                        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                        <script>
                            CKEDITOR.replace('about-us');
                        </script>
                    </div><br>
                    <div class="row" style="float: right;">
                        <div class="col-md-12">
                            <button class="btn btn-success" type="submit"> Update Aboutus </button>
                        </div>
                    </div>
                    <br>
                </form>


                <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <label for="basic-url">Import Professional CSV</label>
                    <div>

                        <input type="file" name="file" class="form-control">

                    </div><br>
                    <div class="row" style="float: right;">
                        <div class="col-md-6">
                            <button class="btn btn-success" type="submit"> Import </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

@endsection
