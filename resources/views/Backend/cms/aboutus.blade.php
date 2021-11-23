@extends('Backend.layouts.app')
@section('content')

    @include('Backend.layouts.partials.breadcumb',['data' => ['Settings'],'button'=>['display' => false]])

    @include('Backend.layouts.message')


    <div class="container-fluid">
        <div class="card white-box">
            <div class="card-body">

                <div class="text-left">
                    <h3 class="text-themecolor">About Us</h3>
                </div>
                <hr>
                <form action="{{ route('setting.updateLinks') }}" method="post">
                    @csrf
                    @method('patch')

                    <div>
                        <textarea name="about-us" id="about-us" cols="40" rows="10"
                            name="">{!! $data['about-us'] ?? '' !!}</textarea>

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

            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

@endsection
