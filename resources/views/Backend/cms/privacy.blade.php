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
                    <h3 class="text-themecolor">Privacy and Policy</h3>
                </div>
                <hr>


                <form action="{{ route('setting.updateLinks') }}" method="post">
                    @csrf
                    @method('patch')

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

            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

@endsection
