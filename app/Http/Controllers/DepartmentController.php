<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index(){
        $departments = Department::get();
        return view('department.index' , compact('departments'));
    }
    public function create(){
        return view('department.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:191|unique:departments,name',
            'email' => 'required|max:191|unique:departments,email',
            'address' => 'required|max:191|unique:departments,address',
        ]);
        $store = Department::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        if(!empty($store->id)){
            return redirect()->route('department.index')->with('success','Department Added');
        }
        else{
            return redirect()->route('department.create')->with('error','Something Went Wrong');
        }
    }
    public function edit($id){
        $department = Department::where('id',$id)->first();
        return view('department.edit',compact('department'));
    }

    public function update(Request $request, $id){
        $request->validate([ 
        'name' => 'required|max:191|unique:departments,name,'.$id,
        'email' => 'required|max:191|unique:departments,email,'.$id,
        'address' => 'required|max:191|unique:departments,address,'.$id,
    ]);
    $update = Department::where('id',$id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
    ]);
    if($update > 0){
        return redirect()->route('department.index')->with('success','department update');
    }
    return redirect()->route('department.index')->with('error','something went wrong');  
    }
    public function delete($id){
        $departments = Department::where('id',$id)->first();
        if(!empty($departments)){
         $departments->delete();
         return redirect()->route('department.index')->with('success','Department delete');
        }
        return redirect()->route('department.index')->with('error','record not found');
     }
}