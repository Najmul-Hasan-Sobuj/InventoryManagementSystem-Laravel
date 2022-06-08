<?php

namespace App\Http\Controllers;

use Helper;
use App\Models\Salary;
use App\Models\Employee;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['salary'] = Salary::join('employees', 'salaries.emp_id', 'employees.id')->select('salaries.*', 'employees.name', 'employees.salary', 'employees.photo')->orderBy('id', 'asc')->get();
        return view('salary.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['employee'] = Employee::get();
        return view('salary.create', $data);
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
            'emp_id'      => 'required',
            'month'      => 'required',
            'year'      => 'required',
            'advance_salary' => 'required',
        ]);

        $advanceAvailable = Salary::where('month', $request->month)->where('year', $request->year)->first();

        if ($advanceAvailable === NULL) {
            if ($validation->passes()) {
                Salary::create([
                    'emp_id'         => $request->emp_id,
                    'month'          => $request->month,
                    'year'           => $request->year,
                    'advance_salary' => $request->advance_salary,
                ]);
                Toastr::success('Post added successfully');
                return redirect()->back();
            } else {
                $messages = $validation->messages();
                foreach ($messages->all() as $message) {
                    Toastr::error($message, 'Failed', ['timeOut' => 10000]);
                }
                return redirect()->back()->withErrors($validation);
            }
        } else {
            Toastr::error('You are already in advance salary');
            return redirect()->back();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Salary::find($id)->delete();
    }
}
