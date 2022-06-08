@extends('layouts.app')
@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Salary Create</h5>
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
            <form id="" class="form-horizontal form-validate-jquery" action="{{ route('salary.store') }}" method="POST">
                @csrf
                <fieldset class="content-group">
                    <legend class="text-bold">Basic inputs</legend>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Employee Name</label>
                        <div class="col-lg-9">
                            <select name="emp_id" class="form-control">
                                <option></option>
                                @foreach ($employee as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Month</label>
                        <div class="col-md-9">
                            <select name="month" class="form-control">
                                <option></option>
                                <?php
                                for ($m = 1; $m <= 12; $m++) {
                                    $month = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
                                ?>
                                <option value="{{ strtolower($month) }}">{{ $month }}</option>
                                <?php
                                 }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Year</label>
                        <div class="col-lg-9">
                            <input type="text" name="year" class="form-control" placeholder="Enter the date of Year ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Advanced Salary</label>
                        <div class="col-lg-9">
                            <input type="text" name="advance_salary" class="form-control"
                                placeholder="Enter Advanced Salary of Ammount ">
                        </div>
                    </div>
                </fieldset>

                <div class="text-right">
                    {{-- <button type="reset" class="btn btn-default" id="reset">Reset <i
                            class="icon-reload-alt position-right"></i></button> --}}
                    <button id="btn" type="submit" class="btn btn-primary">Submit <i
                            class="icon-arrow-right14 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
