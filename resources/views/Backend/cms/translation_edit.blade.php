@extends('Backend.layouts.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    @include('Backend.layouts.partials.breadcumb',['data' => ['Translations'],'button'=>['display' => false]])

    <div class="container-fluid">
        <div class="card white-box">
            <div class="card-body">
                <h2>Edit Translation</h2>
                <hr />
                <form class="m-t-20" method="POST" action="{{ route('edit_translation', $line->id) }}" novalidate
                    autocomplete="off" id="frmValidate">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <h5>English(en) <span class="text-danger">*</span></h5>
                                <input type="text" name="en" value="{{ $line->text['en'] }}" class="form-control"
                                    required data-validation-required-message="en is required" autofocus>
                                <span class="error">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <h5>French(fr) <span class="text-danger">*</span></h5>
                                <input type="email" name="fr" value="{{ $line->text['fr'] }}" class="form-control"
                                    required data-validation-required-message="fr field is required">
                                <span class="error">{{ $errors->first('fr') }}</span>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label>&nbsp;</label><br />
                                <button type="submit" class="btn btn-success zoomer">
                                    Update </i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <h2>Translations</h2>
                <!-- Data Table -->
                <div class="table-responsive m-t-10">
                    <table class="tablesaw table-bordered table-hover table no-wrap" data-tablesaw-mode="swipe"
                        data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap
                        data-tablesaw-mode-switch>
                        <thead>
                            <tr>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1"
                                    class="border">
                                    Sr #
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2"
                                    class="border">
                                    English(en)
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2"
                                    class="border">
                                    French(fr)
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4"
                                    class="border">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @if (isset($lines) && count($lines) > 0)

                                @foreach ($lines as $k => $role)
                                    <tr>
                                        <td>{{ $k + 1 }}</td>
                                        <td>{{ $role->text['en'] }}</td>
                                        <td>{{ $role->text['fr'] }}</td>
                                        <td class="text-nowrap">

                                            <a href="{{ route('properties.edit', $role->id) }}"
                                                class="btn btn-warning zoomer" data-toggle="tooltip"
                                                data-original-title="Edit"> <i class="fa fa-pencil text-white m-r-10"></i>
                                                Edit </a>
                                        </td>

                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align: center;font-weight: 400;">Record Not Found</td>
                                </tr>
                            @endif


                        </tbody>
                    </table>
                    {{-- <div  style="float: right;">
                            {!! $pages !!}
                        </div> --}}

                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
@endsection

@section('page-script')


    <script>
        $(document).ready(function() {

            //alert("Sss");
        });
    </script>
@endsection
