@extends('Backend.layouts.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    @include('Backend.layouts.partials.breadcumb',['data' => ['Business Housemates'],'button'=>['display' => false]])

    <div class="container-fluid">
        <div class="card white-box">
            <div class="card-body">
                <h2>Business Payments</h2>
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
                                    amount
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2" class="border">
                                    Payer email
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2" class="border">
                                    Order Id
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2" class="border">
                                    Order Status
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2"
                                    class="border">
                                    Order Created At
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2"
                                    class="border">
                                    User
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4"
                                    class="border">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @if (isset($payments) && count($payments) > 0)

                                @foreach ($payments as $k => $role)
                                    <tr>
                                        <td>{{ $k + 1 }}</td>
                                        <td>${{ $role->payed_amount }}</td>
                                        <td>{{ $role->payer_email }}</td>
                                        <td>{{ $role->order_id }}</td>
                                        <td>{{ $role->order_status }}</td>
                                        <td>{{ $role->order_created_at }}</td>
                                        <td>{{ $role->User->name }}</td>
                                        <td class="text-nowrap">

                                            @can('payment-refund')
                                                <a href="" class="btn btn-warning zoomer" data-toggle="tooltip"
                                                    data-original-title="Edit"> <i class="fa fa-pencil text-white m-r-10"></i>
                                                    Refund </a>
                                            @endcan

                                            {{-- @can('business-housemates-edit')
                                                <a href="{{ route('housemates.edit', $role->id) }}"
                                                    class="btn btn-warning zoomer" data-toggle="tooltip"
                                                    data-original-title="Edit"> <i class="fa fa-pencil text-white m-r-10"></i>
                                                    Edit </a>
                                            @endcan

                                            @can('business-housemates-view')
                                                <a href="{{ route('housemates.show', $role->id) }}"
                                                    class="btn btn-success zoomer" data-toggle="tooltip"
                                                    data-original-title="view"> <i class="fa fa-pencil text-white m-r-10"></i>
                                                    View </a>
                                            @endcan

                                            @can('business-housemates-delete')
                                                <a href="#!" data-toggle="tooltip" class="btn btn-danger zoomer"
                                                    data-original-title="Delete"
                                                    onclick="event.preventDefault();  (confirm('Are you sure you want to delete this item?')) ? document.getElementById('delete-form-{{ $role->id }}').submit():''">
                                                    <i class="fa fa-trash text-white m-r-10"></i> Delete
                                                </a>

                                                <form id="delete-form-{{ $role->id }}"
                                                    action="{{ route('housemates.destroy', $role->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf @method('delete')
                                                </form>
                                            @endcan --}}

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
