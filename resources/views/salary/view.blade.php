@extends('layouts.app')
@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Advanced Salary Details</h5>
            <div class="heading-elements">
                <ul class="icons-list" style="margin-top: 0px">
                    <li style="margin-right: 10px;"><a href="{{ route('salary.index') }}"
                            class="btn btn-info add-new">Back</a></li>
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body">
            <p class="content-group-lg">Validate.js makes simple clientside form validation easy, whilst still offering
                plenty of customization options. The plugin comes bundled with a useful set of validation methods,
                including
                URL and email validation, while providing an API to write your own methods. All bundled methods come
                with
                default error messages in english and translations into 37 other languages.</p>
            {{-- id,emp_id,month,year,advance_salary = salaryTable --}}
            {{-- name,salary,photo = EmployeeTable --}}
            <form class="form-horizontal form-validate-jquery">
                <fieldset class="content-group">
                    <legend class="text-bold">Basic inputs</legend>
                    @foreach ($salary as $item)
                        <div class="form-group">
                            <label class="control-label col-lg-2">Employee Name</label>
                            <div class="col-lg-9">
                                <input type="text" name="emp_name" value="{{ $item->name }}" class="form-control"
                                    readOnly="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Month</label>
                            <div class="col-lg-9">
                                <input type="text" name="month" value="{{ $item->month }}" class="form-control"
                                    readOnly="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Year</label>
                            <div class="col-lg-9">
                                <input type="text" name="year" value="{{ $item->year }}" class="form-control"
                                    readOnly="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Advanced Salary</label>
                            <div class="col-lg-9">
                                <input type="text" name="advance_salary" value="{{ $item->advance_salary }}"
                                    class="form-control" readOnly="">
                            </div>
                        </div>
                    @endforeach
                </fieldset>
            </form>
        </div>
    </div>
@endsection
