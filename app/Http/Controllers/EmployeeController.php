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
            return redirect()->route('employee.index')->with('success','Employee Added');
        }
        else{
            return redirect()->route('employee.create')->with('error','Something Went Wrong');
        }
    }
    public function edit($id){
        $companies = Company::get();
        $departments = Department::get();
        $employee = Employee::where('id',$id)->first();
        return view('employee.edit',compact('employee','companies','departments'));
    }

    public function update(Request $request, $id){
        $request->validate([ 
        'name' => 'required|max:191|:employees,name'.$id,
        'phone' => 'required|max:191|:employees,phone'.$id,
        'address' => 'required|max:191|:employees,address'.$id,
        'email' => 'required|max:191|:employees,email'.$id,
        'department' => 'required|max:191|:employees,department'.$id,
        'company' => 'required|max:191|:employees,company'.$id,
    ]);
    if($request->file('employee')){
        $employee = $request->file('employee');
        $employeeName = 'employee' . '-' . time() . '.' . $employee->getClientOriginalExtension();
        $employee->move('upload/employee/', $employeeName);
    }
    $update = employee::where('id',$id)->update([
        'name' => $request->name,
        'phone' => $request->phone,
        'address' => $request->address,
        'email' => $request->email,
        'department' => $request->department,
        'company' => $request->company,
        'employee' => $employeeName,
    ]);
    if($update > 0){
        return redirect()->route('employee.index')->with('success','employee update');
    }
    return redirect()->route('employee.index')->with('error','something went wrong');  
    }
    public function delete($id){
        $employees = Employee::where('id',$id)->first();
        if(!empty($employees)){
         $employees->delete();
         return redirect()->route('employee.index')->with('success','Employee delete');
        }
        return redirect()->route('employee.index')->with('error','record not found');
     }
}
