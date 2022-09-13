@extends('layout.scaffold')
@section('content')
<style>
    body{
        background-color: lightgrey;
    }
    label{
        color:white;
    }
</style>
<div class="container mb-5">
    <div class="row mt-5">
            <div class="mt-5 col-md-12">
                    <a href="{{route('employee.index')}}" class="btn btn-info float-right mb-2"> VIEW ALL</a>
            </div>
            @if(Session::has('error'))
            <div class="col-md-12">
                <div class="alert alert-danger">{{Session::get('error')}}</div>
            </div>
            @endif
    </div>
    <div class="card" style="border:4px groove blue">
        <h5 class="card-header text-center  text-light bg-info" > <b>ADD NEW EMPLOYEE</b></h5>
        <div class="card-body "style="background-color: skyblue;">
            <form action="{{route('employee.update' ,$employee->id)}}" method="POST" enctype="multipart/form-data">
                <div class="text-center">
                    <img src="{{asset('assets/img/iStock_000048152418_Medium-56b09b5a3df78cf772cffd11.jpg')}}" alt="iStock_000048152418_Medium-56b09b5a3df78cf772cffd11" width="50%" class="img-thumbnail rounded">
                </div>
                @csrf
                <div class="row">
                    <div class="mt-3 col-md-6">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" style="border:3px groove blue;" value="{{old('name' , $employee->name)}}">
                        <small class="text-danger">@error('name')  {{$message}} @enderror</small>
                    </div>
                    <div class="mt-3 col-md-6">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" style="border:3px groove blue;" value="{{old('phone' , $employee->phone)}}">
                        <small class="text-danger">@error('phone')  {{$message}} @enderror</small>
                    </div>
                    <div class="mt-3 col-md-6">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" style="border:3px groove blue;" value="{{old('address' , $employee->address)}}">
                        <small class="text-danger">@error('address')  {{$message}} @enderror</small>
                    </div>
                    <div class="mt-3 col-md-6">
                        <label>E-mail</label>
                        <input type="text" name="email" class="form-control" style="border:3px groove blue;" value="{{old('email' , $employee->email)}}">
                        <small class="text-danger">@error('email')  {{$message}} @enderror</small>
                    </div>
                    <div class="mt-3 col-md-6">
                            <label for="department">Department</label>
                            <select name="department_id" class="form-control" style="border:3px groove blue;">
                                <option value="">Please Select</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}" @if($department->id == $employee->department_id) selected @endif >{{ $department->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-danger">@error('department'){{$message}} @enderror</small>
                        </div>  
                        <div class="mt-3 col-md-6">
                            <label for="company">Company</label>
                            <select name="company_id" class="form-control" style="border:3px groove blue;">
                                <option value="">Please Select</option>
                                @foreach($companies as $company)
                                    <option value="{{ $company->id }}" @if($company->id == $employee->company_id) selected @endif >{{ $company->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-danger">@error('company'){{$message}} @enderror</small>
                        </div>                    
                        <div class="col-md-12 mt-3">
                            <label for="employee">Employee</label>
                            <input type="file" class="form-control" style="border:3px groove blue;" name="employee">
                            <small class="text-danger">@error('employee'){{$message}} @enderror</small>
                            @if(!empty($employee->employee))
                                <img src="{{asset('upload/employee/'.$employee->employee)}}" alt="" width="200px" class="img-thumbnail mt-3">
                            @endif
                        </div>
                    <div class="mt-3 col-md-12 mt-3">
                        <button type="submit" class="btn btn-info btn-block">ADD NEW</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
</div>
@endsection