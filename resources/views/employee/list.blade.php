@extends('layouts.app')
@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Batch Class List</h5>
            <div class="heading-elements">
                <ul class="icons-list" style="margin-top: 0px">
                    <li style="margin-right: 10px;"><a href="{{ route('employee.create') }}"
                            class="btn btn-info add-new">Add New</a></li>
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
        <table id="studentTable" class="table table-togglable table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th data-toggle="true">SL</th>
                    <th data-hide="phone,tablet">name</th>
                    <th data-hide="phone,tablet">email</th>
                    <th data-hide="phone,,tablet">phone</th>
                    <th data-hide="phone,,tablet">address</th>
                    <th data-hide="phone,,tablet">experience</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            @if ($employee)
                <tbody>
                    @foreach ($employee as $key => $employees)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $employees->name }}</td>
                            <td>{{ $employees->email }}</td>
                            <td>{{ $employees->phone }}</td>
                            <td>{{ $employees->address }}</td>
                            <td>{{ $employees->experience }}</td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="text-primary-600">
                                        <a href="{{ route('employee.edit', [$employees->id]) }}">
                                            <i class="icon-pencil7"></i>
                                        </a>
                                    </li>
                                    <li class="text-danger-600">
                                        <a id="trash" href="{{ route('employee.destroy', [$employees->id]) }}"> @csrf
                                            <i class="icon-trash"></i>
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
                "targets": 6
            }]
        });
    </script>
@endpush
