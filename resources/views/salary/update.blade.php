@extends('layouts.app')
@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">salary Update</h5>
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
            <form id="" class="form-horizontal form-validate-jquery" action="{{ route('salary.update', [$salary->id]) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <fieldset class="content-group">
                    <legend class="text-bold">Basic inputs </legend>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Employee Name</label>
                        <div class="col-lg-9">
                            <select name="emp_id" class="form-control">
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
                                <?php
                                for ($m = 1; $m <= 12; $m++) {
                                    $month = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
                                ?>
                                <option {{ $salary->month == strtolower($month) ? 'selected' : '' }}
                                    value="{{ strtolower($month) }}">{{ $month }}</option>
                                <?php
                                 }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Year</label>
                        <div class="col-lg-9">
                            <input type="text" name="year" value="{{ $salary->year }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Advanced Salary</label>
                        <div class="col-lg-9">
                            <input type="text" name="advance_salary" value="{{ $salary->advance_salary }}"
                                class="form-control">
                        </div>
                    </div>
                </fieldset>
                <div class="text-right">
                    <button id="btn" type="submit" class="btn btn-primary">Update <i
                            class="icon-arrow-right14 position-right"></i></button>
                </div>
        </div>
        </form>
    </div>
    </div>
@endsection
