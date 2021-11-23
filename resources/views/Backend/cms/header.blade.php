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
                                                                                                                            padding: 3px;"
                                id="basic-url" aria-describedby="basic-addon3">
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
                            <input type="file" class="form-control" name="header_video" onchange="loadvideo(event)"
                                style="background: transparent;
                                                                                                                            padding: 3px;" id="basic-url" aria-describedby="basic-addon3"
                                accept="video/mp4,video/x-m4v,video/*">
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
                    <br>
                    <br><br>
                    <br>
                    <br><br>
                    <br>
                    <br><br>
                    <br>
                    <div class="input-group" style="width: 99%;">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Headings</span>
                        </div>
                        <input type="text" name="header_heading_1" value="{{ $data['header_heading_1'] ?? '' }}"
                            placeholder="heading 1" class="form-control">
                        <input type="text" name="header_heading_2" value="{{ $data['header_heading_2'] ?? '' }}"
                            placeholder="heading 2" class="form-control">
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
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

@endsection
