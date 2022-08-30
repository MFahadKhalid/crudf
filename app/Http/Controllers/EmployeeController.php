<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;
use App\Models\Department;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::get();
        return view('employee.index' , compact('employees'));
    }
    public function create(){
        $companies = Company::get();
        $departments = Department::get();
        $employees = Employee::get();
        return view('employee.create' , compact('employees','companies','departments'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:191|unique:employees,name',
            'phone' => 'required|max:191|unique:employees,phone',
            'address' => 'required|max:191|unique:employees,address',
            'email' => 'required|max:191|unique:employees,email',
            'department' => 'required|max:191|:employees,department',
            'company' => 'required|max:191|:employees,company',
        ]);
        if($request->file('employee')){
            $employee = $request->file('employee');
            $employeeName = 'employee' . '-' . time() . '.' . $employee->getClientOriginalExtension();
            $employee->move('upload/employee/', $employeeName);
        }
        $store = Employee::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'department' => $request->department,
            'company' => $request->company,
            'employee' => $employeeName,
        ]);
        if(!empty($store->id)){
            return redirect()->route('employee.index')->with('success','Department Added');
        }
        else{
            return redirect()->route('employee.create')->with('error','Something Went Wrong');
        }
    }
}
