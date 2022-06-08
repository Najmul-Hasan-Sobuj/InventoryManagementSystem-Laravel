@extends('layouts.app')
@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Salary Section</h5>
            <div class="heading-elements">
                <ul class="icons-list" style="margin-top: 0px">
                    <li style="margin-right: 10px;"><a href="{{ route('salary.create') }}" class="btn btn-info add-new">Add
                            New</a></li>
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
                    <th data-hide="phone,tablet">Name</th>
                    <th data-hide="phone,tablet">Salary</th>
                    <th data-hide="phone,,tablet">Date</th>
                    <th data-hide="phone,,tablet">Advanced Salary</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            @if ($salary)
                <tbody>
                    @foreach ($salary as $key => $salarys)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $salarys->name }}</td>
                            <td>{{ $salarys->salary }} &#2547;</td>
                            <td>{{ $salarys->month }} {{ $salarys->year }}</td>
                            <td>{{ $salarys->advance_salary }} &#2547;</td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="text-success-600">
                                        <a href="{{ route('salary.show', [$salarys->id]) }}">
                                            <i class="icon-eye"></i>
                                        </a>
                                    </li>
                                    <li class="text-primary-600">
                                        <a href="{{ route('salary.edit', [$salarys->id]) }}">
                                            <i class="icon-pencil7"></i>
                                        </a>
                                    </li>
                                    <li class="text-danger-600">
                                        <a href="#">
                                            <i class="icon-trash" id="delete"
                                                delete-link="{{ route('salary.destroy', [$salarys->id]) }}"> @csrf</i>
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
                "targets": 5
            }]
        });
    </script>
@endpush
