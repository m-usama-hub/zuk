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
                            <span class="input-group-text" id="basic-addon3"><i class="far fa-envelope"></i>&nbsp;Email</span>
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
