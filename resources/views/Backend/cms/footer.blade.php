@extends('Backend.layouts.app')
@section('content')

    @include('Backend.layouts.partials.breadcumb',['data' => ['Footer'],'button'=>['display' => false]])

    @include('Backend.layouts.message')


    <div class="container-fluid">
        <div class="card white-box">
            <div class="card-body">

                <div class="text-left">
                    <h3 class="text-themecolor">Footer</h3>
                </div>
                <hr>
                <form action="{{ route('setting.updateLinks') }}" method="post">
                    @csrf
                    @method('patch')

                    <div>
                        <label for="">Description</label>
                        <textarea name="footer_text" id="footer_text" class="form-control" cols="40" rows="10"
                            name="">{{ $data['footer_text'] ?? '' }}</textarea>
                    </div><br>
                    <div>
                        <label for="">Copyright</label>
                        <textarea name="footer_cprt" id="footer_cprt" class="form-control" cols="40" rows="5"
                            name="">{{ $data['footer_cprt'] ?? '' }}</textarea>
                    </div><br>
                    <div class="row" style="float: right;">
                        <div class="col-md-12">
                            <button class="btn btn-success" type="submit"> Update Footer </button>
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
