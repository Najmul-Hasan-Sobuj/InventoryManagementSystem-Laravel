@extends('layouts.app')
@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Customer Details</h5>
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
            <form id="" class="form-horizontal form-validate-jquery">
                <fieldset class="content-group">
                    <legend class="text-bold">Basic inputs</legend>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Full Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="name" class="form-control" value="{{ $customer->name }}" disabled
                                placeholder="Enter Your Full Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Email Address</label>
                        <div class="col-lg-9">
                            <input type="email" name="email" class="form-control" value="{{ $customer->email }}"
                                disabled placeholder="Enter Your Email Address">
                        </div>
                    </div>
                    <!-- phone field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Mobile</label>
                        <div class="col-lg-9">
                            <input type="text" name="phone" class="form-control" id="phone"
                                value="{{ $customer->phone }}" disabled placeholder="Enter your valid phone Number">
                        </div>
                    </div>
                    <!-- /phone field -->
                    <!-- address field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Address</label>
                        <div class="col-lg-9">
                            <input type="text" name="address" class="form-control" id="address"
                                value="{{ $customer->address }}" disabled placeholder="Enter your presente address">
                        </div>
                    </div>
                    <!-- /address field -->
                    <!-- experience field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Shop Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="shop_name" class="form-control" id="shop_name"
                                value="{{ $customer->shop_name }}" disabled placeholder="Enter your Shop Name">
                        </div>
                    </div>
                    <!-- salary field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Account Holder Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="account_holder" class="form-control" id="account_holder"
                                value="{{ $customer->account_holder }}" disabled
                                placeholder="Enter your account Holder name.">
                        </div>
                    </div>
                    <!-- /salary field -->
                    <!-- vacation field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Account Number</label>
                        <div class="col-lg-9">
                            <input type="text" name="account_number" class="form-control" id="account_number"
                                value="{{ $customer->account_number }}" disabled placeholder="Enter your account Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Bank Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="bank_name" class="form-control" id="bank_name"
                                value="{{ $customer->bank_name }}" disabled placeholder="Enter your Bank Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Branch Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="bank_branch" class="form-control" id="bank_branch"
                                value="{{ $customer->bank_branch }}" disabled placeholder="Enter your Branch Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">City</label>
                        <div class="col-lg-9">
                            <input type="text" name="city" class="form-control" id="city" value="{{ $customer->city }}"
                                disabled placeholder="Enter your city name">
                        </div>
                    </div>
                    <!-- /vacation field -->
                </fieldset>
            </form>
        </div>
    </div>
@endsection
