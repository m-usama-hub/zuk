@extends('Backend.layouts.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    @include('Backend.layouts.partials.breadcumb',['data' => ['Pages'],'button'=>['display' => false]])

    <div class="container-fluid">
        <div class="card white-box">
            <div class="card-body">
                <h2>Pages</h2>
                <!-- Data Table -->
                <div class="table-responsive m-t-10">
                    <table class="tablesaw table-bordered table-hover table no-wrap" data-tablesaw-mode="swipe"
                        data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap
                        data-tablesaw-mode-switch>
                        <thead>
                            <tr>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1" class="border">
                                    Sr #
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2" class="border">
                                    Page
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2" class="border">
                                    Status
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4" class="border">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @if (isset($pages) && count($pages) > 0)

                                @foreach ($pages as $k => $role)
                                    <tr>
                                        <td>{{ $k + 1 }}</td>
                                        <td>{{ $role->page_title }}</td>
                                        <td>{{ $role->isActive == 1 ? 'Active' : 'InActive' }}</td>
                                        <td class="text-nowrap">

                                            <a data-toggle="modal" data-target="#exampleModalCenter{{ $role->id }}"
                                                class="btn btn-warning zoomer" data-toggle="tooltip"
                                                data-original-title="Edit"> <i class="fa fa-pencil text-white m-r-10"></i>
                                                Edit CMS </a>
                                            <div class="modal fade" id="exampleModalCenter{{ $role->id }}"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">
                                                                {{ $role->page_title }}</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{ route('editpageCMS', $role->id) }}"
                                                            method="post">
                                                            @csrf
                                                            <div class="modal-body">


                                                                @foreach ($role->Data as $item)

                                                                    <label for="basic-url">{{ $item->key }}</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" name="{{ $item->id }}"
                                                                            value="{{ $item->value }}"
                                                                            class="form-control" id="basic-url"
                                                                            aria-describedby="basic-addon3">
                                                                    </div>
                                                                @endforeach

                                                                @if (count($role->Data) <= 0)

                                                                    <label for="basic-url">No Data Found.</label>

                                                                @endif


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <input type="submit" class="btn btn-primary" value="Save">

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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
