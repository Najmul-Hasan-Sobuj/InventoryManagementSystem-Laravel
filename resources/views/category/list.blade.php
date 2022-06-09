@extends('layouts.app')
@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">All Category Details</h5>
            <div class="heading-elements">
                <ul class="icons-list" style="margin-top: 0px">
                    <li style="margin-right: 10px;"><a href="{{ route('category.create') }}"
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
                    <th data-hide="phone,tablet">Category Name</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            @if ($category)
                <tbody>
                    @foreach ($category as $key => $categorys)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $categorys->cat_name }}</td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="text-primary-600">
                                        <a href="{{ route('category.edit', [$categorys->id]) }}">
                                            <i class="icon-pencil7"></i>
                                        </a>
                                    </li>
                                    <li class="text-danger-600">
                                        <a href="#">
                                            <i class="icon-trash" id="delete"
                                                delete-link="{{ route('category.destroy', [$categorys->id]) }}"> @csrf</i>
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
                "targets": 2
            }]
        });
    </script>
@endpush
