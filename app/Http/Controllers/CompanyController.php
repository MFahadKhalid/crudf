<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index(){
        $companies = Company::get();
        return view('company.index' , compact('companies'));
    }
    public function create(){
        return view('company.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:191|unique:companies,name',
            'number' => 'required|max:191|unique:companies,number',
            'email' => 'required|max:191|unique:companies,email',
        ]);
        $store = Company::create([
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
        ]);
        if(!empty($store->id)){
            return redirect()->route('company.index')->with('success','Company Added');
        }
        else{
            return redirect()->route('company.create')->with('error','Something Went Wrong');
        }
    }
    public function edit($id){
        $company = Company::where('id',$id)->first();
        return view('company.edit',compact('company'));
    }

    public function update(Request $request, $id){
        $request->validate([ 
        'name' => 'required|max:191|:companies,name'.$id,
        'number' => 'required|max:191|:companies,number'.$id,
        'email' => 'required|max:191|:companies,email'.$id,
    ]);
    $update = Company::where('id',$id)->update([
        'name' => $request->name,
        'number' => $request->number,
        'email' => $request->email,
    ]);
    if($update > 0){
        return redirect()->route('company.index')->with('success','company update');
    }
    return redirect()->route('company.index')->with('error','something went wrong');  
    }
    public function delete($id){
        $companies = Company::where('id',$id)->first();
        if(!empty($companies)){
         $companies->delete();
         return redirect()->route('company.index')->with('success','Company delete');
        }
        return redirect()->route('company.index')->with('error','record not found');
     }
}
