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
                    <a href="{{route('company.index')}}" class="btn btn-warning float-right mb-2"> VIEW ALL</a>
            </div>
            @if(Session::has('error'))
            <div class="col-md-12">
                <div class="alert alert-danger">{{Session::get('error')}}</div>
            </div>
            @endif
    </div>
    <div class="card" style="border:4px groove gold">
        <h5 class="card-header text-center  text-light bg-warning" > <b>ADD NEW COMPANY</b></h5>
        <div class="card-body "style="background-color:black;">
            <form action="{{route('company.store')}}" method="POST">
                <div class="text-center">
                    <img src="{{asset('assets/img/Company-Incorporation.jpg')}}" alt="Company-Incorporation" class="img-thumbnail rounded" width="50%">
                </div>
                @csrf
                <div class="row">
                    <div class="mt-3 col-md-12">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" style="border:3px groove gold;" value="{{old('name')}}">
                        <small class="text-danger">@error('name')  {{$message}} @enderror</small>
                    </div>
                    <div class="mt-3 col-md-12">
                        <label>Number</label>
                        <input type="text" name="number" class="form-control" style="border:3px groove gold;" value="{{old('number')}}">
                        <small class="text-danger">@error('number')  {{$message}} @enderror</small>
                    </div>
                    <div class="mt-3 col-md-12">
                        <label>E-mail</label>
                        <input type="text" name="email" class="form-control" style="border:3px groove gold;" value="{{old('email')}}">
                        <small class="text-danger">@error('email')  {{$message}} @enderror</small>
                    </div>
                    <div class="mt-3 col-md-12 mt-3">
                        <button type="submit" class="btn btn-primary btn-block bg-warning">ADD NEW</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
</div>
@endsection