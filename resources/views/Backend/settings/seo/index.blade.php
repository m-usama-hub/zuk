@extends('Backend.layouts.app')
@section('content')

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    @include('Backend.layouts.partials.breadcumb',['data' => ['Settings'],'button'=>['display' => false]])

    @include('Backend.layouts.message')

    <div class="container-fluid">
        <div class="card white-box">
            <div class="card-body">

                <div class="text-left">
                    <h3 class="text-themecolor">SEO Settings</h3>
                </div>
                <hr>

                <fieldset>
                    <legend>
                        <h4 class="text-themecolor">Home Page</h4>
                    </legend>

                    <form action="{{ route('setting.updateLinks') }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">&nbsp;Meta Title</span>
                            </div>
                            <input type="text" class="form-control" name="meta_title_home"
                                value="{{ $data['meta_title_home'] ?? '' }}" id="basic-url" aria-describedby="basic-addon3">

                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">&nbsp;Canonical Url</span>
                            </div>
                            <input type="text" class="form-control" name="canonical_url"
                                value="{{ $data['canonical_url'] ?? '' }}" id="basic-url" aria-describedby="basic-addon3">

                        </div>
                        Meta Description
                        <textarea name="meta_description_home" class="form-control" id="" cols="30"
                            rows="10">{{ $data['meta_description_home'] ?? '' }}</textarea>

                        <br>
                        <div class="row" style="float: right;">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit"> Update SEO Sttings</button>
                            </div>
                        </div>
                    </form>

                </fieldset>
                <hr>
                <fieldset>
                    <legend>
                        <h4 class="text-themecolor">Message Page</h4>
                    </legend>

                    <form action="{{ route('setting.updateLinks') }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">&nbsp;Meta Title</span>
                            </div>
                            <input type="text" class="form-control" name="meta_message_title_home"
                                value="{{ $data['meta_message_title_home'] ?? '' }}" id="basic-url" aria-describedby="basic-addon3">

                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">&nbsp;Canonical Url</span>
                            </div>
                            <input type="text" class="form-control" name="canonical_message_url"
                                value="{{ $data['canonical_message_url'] ?? '' }}" id="basic-url" aria-describedby="basic-addon3">

                        </div>
                        Meta Description
                        <textarea name="meta_message_description_home" class="form-control" id="" cols="30"
                            rows="10">{{ $data['meta_message_description_home'] ?? '' }}</textarea>

                        <br>
                        <div class="row" style="float: right;">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit"> Update </button>
                            </div>
                        </div>
                    </form>

                </fieldset>
                <hr>
                <fieldset>
                    <legend>
                        <h4 class="text-themecolor">Professional Page</h4>
                    </legend>

                    <form action="{{ route('setting.updateLinks') }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">&nbsp;Meta Title</span>
                            </div>
                            <input type="text" class="form-control" name="meta_professional_title_home"
                                value="{{ $data['meta_professional_title_home'] ?? '' }}" id="basic-url" aria-describedby="basic-addon3">

                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">&nbsp;Canonical Url</span>
                            </div>
                            <input type="text" class="form-control" name="canonical_professional_url"
                                value="{{ $data['canonical_professional_url'] ?? '' }}" id="basic-url" aria-describedby="basic-addon3">

                        </div>
                        Meta Description
                        <textarea name="meta_professional_description_home" class="form-control" id="" cols="30"
                            rows="10">{{ $data['meta_professional_description_home'] ?? '' }}</textarea>

                        <br>
                        <div class="row" style="float: right;">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit"> Update  </button>
                            </div>
                        </div>
                    </form>

                </fieldset>
                <hr>
                <fieldset>
                    <legend>
                        <h4 class="text-themecolor">Property Page</h4>
                    </legend>

                    <form action="{{ route('setting.updateLinks') }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">&nbsp;Meta Title</span>
                            </div>
                            <input type="text" class="form-control" name="meta_Property_title_home"
                                value="{{ $data['meta_Property_title_home'] ?? '' }}" id="basic-url" aria-describedby="basic-addon3">

                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">&nbsp;Canonical Url</span>
                            </div>
                            <input type="text" class="form-control" name="canonical_Property_url"
                                value="{{ $data['canonical_Property_url'] ?? '' }}" id="basic-url" aria-describedby="basic-addon3">

                        </div>
                        Meta Description
                        <textarea name="meta_Property_description_home" class="form-control" id="" cols="30"
                            rows="10">{{ $data['meta_Property_description_home'] ?? '' }}</textarea>

                        <br>
                        <div class="row" style="float: right;">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit"> Update  </button>
                            </div>
                        </div>
                    </form>

                </fieldset>
                <hr>
                <fieldset>
                    <legend>
                        <h4 class="text-themecolor">Item Page</h4>
                    </legend>

                    <form action="{{ route('setting.updateLinks') }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">&nbsp;Meta Title</span>
                            </div>
                            <input type="text" class="form-control" name="meta_Item_title_home"
                                value="{{ $data['meta_Item_title_home'] ?? '' }}" id="basic-url" aria-describedby="basic-addon3">

                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">&nbsp;Canonical Url</span>
                            </div>
                            <input type="text" class="form-control" name="canonical_Item_url"
                                value="{{ $data['canonical_Item_url'] ?? '' }}" id="basic-url" aria-describedby="basic-addon3">

                        </div>
                        Meta Description
                        <textarea name="meta_Item_description_home" class="form-control" id="" cols="30"
                            rows="10">{{ $data['meta_Item_description_home'] ?? '' }}</textarea>

                        <br>
                        <div class="row" style="float: right;">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit"> Update  </button>
                            </div>
                        </div>
                    </form>

                </fieldset>
                <hr>
                <fieldset>
                    <legend>
                        <h4 class="text-themecolor">Housemate Page</h4>
                    </legend>

                    <form action="{{ route('setting.updateLinks') }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">&nbsp;Meta Title</span>
                            </div>
                            <input type="text" class="form-control" name="meta_Housemate_title_home"
                                value="{{ $data['meta_Housemate_title_home'] ?? '' }}" id="basic-url" aria-describedby="basic-addon3">

                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">&nbsp;Canonical Url</span>
                            </div>
                            <input type="text" class="form-control" name="canonical_Housemate_url"
                                value="{{ $data['canonical_Housemate_url'] ?? '' }}" id="basic-url" aria-describedby="basic-addon3">

                        </div>
                        Meta Description
                        <textarea name="meta_Housemate_description_home" class="form-control" id="" cols="30"
                            rows="10">{{ $data['meta_Housemate_description_home'] ?? '' }}</textarea>

                        <br>
                        <div class="row" style="float: right;">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit"> Update  </button>
                            </div>
                        </div>
                    </form>

                </fieldset>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

@endsection
