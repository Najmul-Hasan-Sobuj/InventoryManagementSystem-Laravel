<?php

namespace App\Http\Controllers;

use Helper;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['supplier'] = Supplier::get();
        return view('supplier.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
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
            'type'           => 'required',
            'image'          => 'required',
            'shop'           => 'required',
            'account_holder' => 'required',
            'account_number' => 'required',
            'bank_name'      => 'required',
            'branch_name'    => 'required',
            'city'           => 'required',
        ]);

        if ($validation->passes()) {
            $mainFile = $request->image;
            $globalFunImg =  Helper::imageUpload($mainFile);

            if ($globalFunImg['status'] == 1) {
                Supplier::create([
                    'name'           => $request->name,
                    'email'          => $request->email,
                    'phone'          => $request->phone,
                    'address'        => $request->address,
                    'type'           => $request->type,
                    'photo'          => $globalFunImg['filaName'],
                    'shop'           => $request->shop,
                    'account_holder' => $request->account_holder,
                    'account_number' => $request->account_number,
                    'bank_name'      => $request->bank_name,
                    'branch_name'    => $request->branch_name,
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
        $data['supplier'] = Supplier::find($id)->first();
        return view('supplier.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['supplier'] = Supplier::find($id);
        return view('supplier.update', $data);
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
            'type'           => 'required',
            'photo'          => 'required',
            'shop'           => 'required',
            'account_holder' => 'required',
            'account_number' => 'required',
            'bank_name'      => 'required',
            'branch_name'    => 'required',
            'city'           => 'required',
        ]);

        if ($validation->passes()) {
            $insertData = [
                'name'           => $request->name,
                'email'          => $request->email,
                'phone'          => $request->phone,
                'address'        => $request->address,
                'type'           => $request->type,
                'photo'          => $request->photo,
                'shop'           => $request->shop,
                'account_holder' => $request->account_holder,
                'account_number' => $request->account_number,
                'bank_name'      => $request->bank_name,
                'branch_name'    => $request->branch_name,
                'city'           => $request->city,

            ];

            $supplierInfo = Supplier::find($id);
            if (isset($request->image) && $supplierInfo->image != $request->image) {
                $mainFile = $request->image;
                $globalFunImg =  Helper::imageUpload($mainFile);

                if ($globalFunImg['status'] == 1) {
                    File::delete(public_path('uploads/') . $supplierInfo->image);
                    File::delete(public_path('uploads/thumb/') . $supplierInfo->image);

                    $insertData['image'] = $globalFunImg['filaName'];
                    $supplierInfo->update($insertData);
                    Toastr::success('Post update successfully');
                    return redirect()->back();
                } else {
                    Toastr::warning('File extention not matching');
                    return redirect()->back();
                }
            } else {
                $supplierInfo->update($insertData);
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
        Supplier::find($id)->delete();
    }
}
