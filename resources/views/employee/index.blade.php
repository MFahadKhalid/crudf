@extends('layout.scaffold')
@section('content')
<style>
    body{
        background-color: lightgrey;
    }
</style>
    <div class="container mt-5 pt-5">
        <h1 class="text-center text-info">Employee Table</h1>        
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('employee.create')}}" class="btn btn-success float-right mb-5">Add More Data</a>
            </div>
            @if(Session::has('success'))
            <div class="col-md-12">
                <div class="alert alert-success">{{Session::get('success')}}</div>
            </div>
            @endif
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>E-mail</th>
                    <th>Department</th>
                    <th>Company</th>
                    <th>Employee</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->department }}</td>
                    <td>{{ $employee->company }}</td>
                    <td style="width:10%"><img class="rounded img-thumbnail" src="{{asset('upload/employee/'.$employee->employee)}}" alt="" width="100%"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection