@extends('layouts.app')
@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Customer Create</h5>
            <div class="heading-elements">
                <ul class="icons-list" style="margin-top: 0px">
                    <li style="margin-right: 10px;"><a href="{{ route('customer.index') }}"
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
            <form id="" class="form-horizontal form-validate-jquery" action="{{ route('customer.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <fieldset class="content-group">
                    <legend class="text-bold">Basic inputs</legend>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Full Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="name" class="form-control" placeholder="Enter Your Full Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Email Address</label>
                        <div class="col-lg-9">
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address">
                        </div>
                    </div>
                    <!-- phone field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Mobile</label>
                        <div class="col-lg-9">
                            <input type="text" name="phone" class="form-control" id="phone"
                                placeholder="Enter your valid phone Number">
                        </div>
                    </div>
                    <!-- /phone field -->
                    <!-- address field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Address</label>
                        <div class="col-lg-9">
                            <input type="text" name="address" class="form-control" id="address"
                                placeholder="Enter your presente address">
                        </div>
                    </div>
                    <!-- /address field -->
                    <!-- experience field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Shop Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="shop_name" class="form-control" id="shop_name"
                                placeholder="Enter your Shop Name">
                        </div>
                    </div>
                    <!-- /experience field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Customer Photo</label>
                        <div class="col-lg-9">
                            <input type="file" name="image" class="file-styled">
                        </div>
                    </div>
                    <!-- /styled file uploader -->
                    <!-- salary field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Account Holder Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="account_holder" class="form-control" id="account_holder"
                                placeholder="Enter your account Holder name.">
                        </div>
                    </div>
                    <!-- /salary field -->
                    <!-- vacation field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Account Number</label>
                        <div class="col-lg-9">
                            <input type="text" name="account_number" class="form-control" id="account_number"
                                placeholder="Enter your account Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Bank Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="bank_name" class="form-control" id="bank_name"
                                placeholder="Enter your Bank Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Branch Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="bank_branch" class="form-control" id="bank_branch"
                                placeholder="Enter your Branch Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">City</label>
                        <div class="col-lg-9">
                            <input type="text" name="city" class="form-control" id="city"
                                placeholder="Enter your city name">
                        </div>
                    </div>
                    <!-- /vacation field -->
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
