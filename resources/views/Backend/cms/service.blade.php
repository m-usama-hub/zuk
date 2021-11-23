@extends('Backend.layouts.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    @include('Backend.layouts.partials.breadcumb',['data' => ['services'],'button'=>['display' => false]])

    <div class="container-fluid">
        <div class="card white-box">
            <div class="card-body">
                <h2>services</h2>

                <form action="{{ route('setting.updateLinks') }}" method="post">
                    @method('patch')
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Title</span>
                        </div>

                        <input type="text" class="form-control" value="{{ $data['service_title'] ?? '' }}"
                            name="service_title" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Update</button>
                        </div>
                    </div>
                </form>

                <form action="{{ route('setting.updateLinks') }}" method="post">
                    @method('patch')
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Sub Title</span>
                        </div>

                        <input type="text" class="form-control" value="{{ $data['service_sub_title'] ?? '' }}"
                            name="service_sub_title" placeholder="Sub Title" aria-label="Username"
                            aria-describedby="basic-addon1">

                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Update</button>
                        </div>
                    </div>
                </form>
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
                                    service title
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2"
                                    class="border">
                                    service image
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4"
                                    class="border">
                                    Description
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2"
                                    class="border">
                                    status
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2"
                                    class="border">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @if (isset($services) && count($services) > 0)

                                @foreach ($services as $k => $role)
                                    <tr>
                                        <td>{{ $k + 1 }}</td>
                                        <td>{{ $role->title }}</td>
                                        <td> <img src="{{ $role->image }}" alt=""></td>
                                        <td>{{ substr($role->description, 0, 30) }}....</td>
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
                                                                {{ $role->title }}</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{ route('updateService', $role->id) }}"
                                                            enctype="multipart/form-data" method="post">
                                                            @csrf
                                                            <div class="modal-body">

                                                                <label for="basic-url">Title</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" name="title"
                                                                        value="{{ $role->title }}" class="form-control"
                                                                        id="basic-url" aria-describedby="basic-addon3">
                                                                </div>

                                                                <label for="basic-url">Description</label>
                                                                <div class="input-group mb-3">
                                                                    <textarea class="form-control" name="description"
                                                                        id="" cols="30"
                                                                        rows="10">{{ $role->description }}</textarea>

                                                                </div>

                                                                <label for="basic-url">Image</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="file" name="image" class="form-control"
                                                                        id="basic-url" aria-describedby="basic-addon3">
                                                                </div>

                                                                {{-- <label for="basic-url">Status</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="checkbox" name="isActive"
                                                                        class="form-control"
                                                                        {{ $role->isActive == 1 ? 'checked' : '' }}
                                                                        id="basic-url" aria-describedby="basic-addon3">
                                                                </div> --}}

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
                                    <td colspan="6" style="text-align: center;font-weight: 400;">Record Not Found</td>
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
