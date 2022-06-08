@extends('layouts.app')
@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Employee Update</h5>
            <div class="heading-elements">
                <ul class="icons-list" style="margin-top: 0px">
                    <li style="margin-right: 10px;"><a href="{{ route('employee.index') }}"
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
            <form id="" class="form-horizontal form-validate-jquery"
                action="{{ route('employee.update', [$employee->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <fieldset class="content-group">
                    <legend class="text-bold">Basic inputs</legend>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Full Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="name" value="{{ $employee->name }}" class="form-control"
                                placeholder="Enter Your Full Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Email Address</label>
                        <div class="col-lg-9">
                            <input type="email" name="email" value="{{ $employee->email }}" class="form-control"
                                placeholder="Enter Your Email Address">
                        </div>
                    </div>
                    <!-- phone field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Mobile</label>
                        <div class="col-lg-9">
                            <input type="text" name="phone" value="{{ $employee->phone }}" class="form-control"
                                id="phone" placeholder="Enter your valid phone Number">
                        </div>
                    </div>
                    <!-- /phone field -->
                    <!-- address field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Address</label>
                        <div class="col-lg-9">
                            <input type="text" name="address" value="{{ $employee->address }}" class="form-control"
                                id="address" placeholder="Enter your presente address">
                        </div>
                    </div>
                    <!-- /address field -->
                    <!-- experience field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Experience</label>
                        <div class="col-lg-9">
                            <input type="text" name="experience" value="{{ $employee->experience }}"
                                class="form-control" id="experience" placeholder="Enter your experience. e.g: Yes/No">
                        </div>
                    </div>
                    <!-- /experience field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Employee Photo</label>
                        <div class="col-lg-9">
                            <input type="file" name="image" class="file-styled">
                        </div>
                    </div>
                    <!-- /styled file uploader -->
                    <!-- salary field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Salary</label>
                        <div class="col-lg-9">
                            <input type="text" name="salary" value="{{ $employee->salary }}" class="form-control"
                                id="salary" placeholder="Enter your salary. e.g: 50000">
                        </div>
                    </div>
                    <!-- /salary field -->
                    <!-- vacation field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Vacation</label>
                        <div class="col-lg-9">
                            <input type="text" name="vacation" value="{{ $employee->vacation }}" class="form-control"
                                id="vacation" placeholder="Enter your number of vacation">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">City</label>
                        <div class="col-lg-9">
                            <input type="text" name="city" value="{{ $employee->city }}" class="form-control" id="city"
                                placeholder="Enter your city name">
                        </div>
                    </div>
                    <!-- /vacation field -->
                </fieldset>

                <div class="text-right">
                    {{-- <button type="reset" class="btn btn-default" id="reset">Reset <i
                            class="icon-reload-alt position-right"></i></button> --}}
                    <button id="btn" type="submit" class="btn btn-primary">Update <i
                            class="icon-arrow-right14 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
