<?php

namespace App\Http\Controllers;

use Helper;
use App\Models\Customer;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['customer'] = Customer::get();
        return view('customer.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name'           => 'required',
            'email'          => 'required',
            'phone'          => 'required',
            'address'        => 'required',
            'shop_name'      => 'required',
            'image'          => 'required',
            'account_holder' => 'required',
            'account_number' => 'required',
            'bank_name'      => 'required',
            'bank_branch'    => 'required',
            'city'           => 'required',
        ]);

        if ($validation->passes()) {
            $mainFile = $request->image;
            $globalFunImg =  Helper::imageUpload($mainFile);

            if ($globalFunImg['status'] == 1) {
                Customer::create([
                    'name'           => $request->name,
                    'email'          => $request->email,
                    'phone'          => $request->phone,
                    'address'        => $request->address,
                    'shop_name'      => $request->shop_name,
                    'photo'          => $globalFunImg['filaName'],
                    'account_holder' => $request->account_holder,
                    'account_number' => $request->account_number,
                    'bank_name'      => $request->bank_name,
                    'bank_branch'    => $request->bank_branch,
                    'city'           => $request->city,
                ]);
                Toastr::success('Post added successfully');
                return redirect()->back();
            } else {
                Toastr::warning('File extention not matching');
                return redirect()->back();
            }
        } else {
            $messages = $validation->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 10000]);
            }
            return redirect()->back()->withErrors($validation);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['customer'] = Customer::find($id)->first();
        return view('customer.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['customer'] = Customer::find($id);
        return view('customer.update', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'name'           => 'required',
            'email'          => 'required',
            'phone'          => 'required',
            'address'        => 'required',
            'shop_name'      => 'required',
            'account_holder' => 'required',
            'account_number' => 'required',
            'bank_name'      => 'required',
            'bank_branch'    => 'required',
            'city'           => 'required',
        ]);

        if ($validation->passes()) {
            $insertData = [
                'name'           => $request->name,
                'email'          => $request->email,
                'phone'          => $request->phone,
                'address'        => $request->address,
                'shop_name'      => $request->shop_name,
                'photo'          => $request->image,
                'account_holder' => $request->account_holder,
                'account_number' => $request->account_number,
                'bank_name'      => $request->bank_name,
                'bank_branch'    => $request->bank_branch,
                'city'           => $request->city,

            ];

            $customerInfo = Customer::find($id);
            if (isset($request->image) && $customerInfo->image != $request->image) {
                $mainFile = $request->image;
                $globalFunImg =  Helper::imageUpload($mainFile);

                if ($globalFunImg['status'] == 1) {
                    File::delete(public_path('uploads/') . $customerInfo->image);
                    File::delete(public_path('uploads/thumb/') . $customerInfo->image);

                    $insertData['image'] = $globalFunImg['filaName'];
                    $customerInfo->update($insertData);
                    Toastr::success('Post update successfully');
                    return redirect()->back();
                } else {
                    Toastr::warning('File extention not matching');
                    return redirect()->back();
                }
            } else {
                $customerInfo->update($insertData);
                Toastr::success('Post update successfully');
                return redirect()->back();
            }
        } else {
            $messages = $validation->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 10000]);
            }
            return redirect()->back()->withErrors($validation);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::valid()->find($id)->delete();
    }
}
