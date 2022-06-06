@extends('layouts.app')
@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Supplier Details</h5>
            <div class="heading-elements">
                <ul class="icons-list" style="margin-top: 0px">
                    <li style="margin-right: 10px;"><a href="{{ route('supplier.index') }}"
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
                            <input type="text" name="name" class="form-control" disabled value="{{ $supplier->name }}"
                                placeholder="Enter Your Full Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Email Address</label>
                        <div class="col-lg-9">
                            <input type="email" name="email" class="form-control" disabled
                                value="{{ $supplier->email }}" placeholder="Enter Your Email Address">
                        </div>
                    </div>
                    <!-- phone field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Mobile</label>
                        <div class="col-lg-9">
                            <input type="text" name="phone" class="form-control" id="phone" disabled
                                value="{{ $supplier->phone }}" placeholder="Enter your valid phone Number">
                        </div>
                    </div>
                    <!-- /phone field -->
                    <!-- address field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Address</label>
                        <div class="col-lg-9">
                            <input type="text" name="address" class="form-control" id="address" disabled
                                value="{{ $supplier->address }}" placeholder="Enter your presente address">
                        </div>
                    </div>
                    <!-- /address field -->
                    <!-- experience field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Type</label>
                        <div class="col-lg-9">
                            <input type="text" name="type" class="form-control" id="type" disabled
                                value="{{ $supplier->type }}" placeholder="Enter your Type">
                        </div>
                    </div>
                    <!-- /experience field -->
                    <!-- salary field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Shop</label>
                        <div class="col-lg-9">
                            <input type="text" name="shop" class="form-control" id="shop" disabled
                                value="{{ $supplier->shop }}" placeholder="Enter your Shop">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Account Holder Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="account_holder" class="form-control" id="account_holder" disabled
                                value="{{ $supplier->account_holder }}" placeholder="Enter your account Holder name.">
                        </div>
                    </div>
                    <!-- /salary field -->
                    <!-- vacation field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Account Number</label>
                        <div class="col-lg-9">
                            <input type="text" name="account_number" class="form-control" id="account_number" disabled
                                value="{{ $supplier->account_number }}" placeholder="Enter your account Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Bank Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="bank_name" class="form-control" id="bank_name" disabled
                                value="{{ $supplier->bank_name }}" placeholder="Enter your Bank Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Branch Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="branch_name" class="form-control" id="branch_name" disabled
                                value="{{ $supplier->branch_name }}" placeholder="Enter your Branch Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">City</label>
                        <div class="col-lg-9">
                            <input type="text" name="city" class="form-control" id="city" disabled
                                value="{{ $supplier->city }}" placeholder="Enter your city name">
                        </div>
                    </div>
                    <!-- /vacation field -->
                </fieldset>
            </form>
        </div>
    </div>
@endsection
