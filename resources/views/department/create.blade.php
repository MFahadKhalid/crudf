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
                    <a href="{{route('department.index')}}" class="btn btn-success float-right mb-2"> VIEW ALL</a>
            </div>
            @if(Session::has('error'))
            <div class="col-md-12">
                <div class="alert alert-danger">{{Session::get('error')}}</div>
            </div>
            @endif
    </div>
    <div class="card" style="border:4px groove green">
        <h5 class="card-header text-center  text-light bg-success" > <b>ADD NEW DEPARTMENT</b></h5>
        <div class="card-body "style="background-color: orange;">
            <form action="{{route('department.store')}}" method="POST">
                <div class="text-center">
                    <img src="{{asset('assets/img/ri-police-department-exterior-dusk-2-hrz-large.jpg')}}" alt="ri-police-department-exterior-dusk-2-hrz-large" width="50%" class="rounded img-thumbnail">
                </div>
                @csrf
                <div class="row">
                    <div class="mt-3 col-md-12">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" style="border:3px groove green;" value="{{old('name')}}">
                        <small class="text-danger">@error('name')  {{$message}} @enderror</small>
                    </div>
                    <div class="mt-3 col-md-12">
                        <label>E-mail</label>
                        <input type="text" name="email" class="form-control" style="border:3px groove green;" value="{{old('email')}}">
                        <small class="text-danger">@error('email')  {{$message}} @enderror</small>
                    </div>
                    <div class="mt-3 col-md-12">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" style="border:3px groove green;" value="{{old('address')}}">
                        <small class="text-danger">@error('address')  {{$message}} @enderror</small>
                    </div>
                    <div class="mt-3 col-md-12 mt-3">
                        <button type="submit" class="btn btn-success btn-block">ADD NEW</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
</div>
@endsection