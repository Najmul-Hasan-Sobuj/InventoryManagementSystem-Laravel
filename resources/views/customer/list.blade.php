@extends('layouts.app')
@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">All Customer Details</h5>
            <div class="heading-elements">
                <ul class="icons-list" style="margin-top: 0px">
                    <li style="margin-right: 10px;"><a href="{{ route('customer.create') }}"
                            class="btn btn-info add-new">Add New</a></li>
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
        <table id="studentTable" class="table table-togglable table-bordered table-striped table-hover data-list">
            <thead>
                <tr>
                    <th data-toggle="true">SL</th>
                    <th data-hide="phone,tablet">name</th>
                    <th data-hide="phone,tablet">phone</th>
                    <th data-hide="phone,,tablet">shop_name</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            @if ($customer)
                <tbody>
                    @foreach ($customer as $key => $customers)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $customers->name }}</td>
                            <td>{{ $customers->phone }}</td>
                            <td>{{ $customers->address }}</td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="text-success-600">
                                        <a href="{{ route('customer.show', [$customers->id]) }}">
                                            <i class="icon-eye"></i>
                                        </a>
                                    </li>
                                    <li class="text-primary-600">
                                        <a href="{{ route('customer.edit', [$customers->id]) }}">
                                            <i class="icon-pencil7"></i>
                                        </a>
                                    </li>
                                    <li class="text-danger-600">
                                        <a href="#">
                                            <i class="icon-trash" id="delete"
                                                delete-link="{{ route('customer.destroy', [$customers->id]) }}"> @csrf</i>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @endif
        </table>
    </div>
@endsection

@push('script')
    <script type="text/javascript">
        $('#studentTable').DataTable({
            dom: 'lBfrtip',
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                'orderable': false,
                "targets": 4
            }]
        });
    </script>
@endpush
