@extends('layout.scaffold')
@section('content')
<style>
    body{
        background-color: lightgrey;
    }
</style>
    <div class="container mt-5 pt-5">
        <h1 class="text-center text-info">Department Table</h1>        
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('department.create')}}" class="btn btn-success float-right mb-5">Add More Data</a>
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
                    <th>E-mail</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->email }}</td>
                    <td>{{ $department->address }}</td>
                    <td>
                        <a href="{{route('department.edit', $department->id)}}" style="text-decoration: none;"><img src="{{asset('assets/img/b_edit.png')}}" alt="b_edit"> Edit</a>
                        &nbsp;|&nbsp;
                        <a class="text-danger" href="{{route('department.delete', $department->id)}}" style="text-decoration: none;"><img src="{{asset('assets/img/b_drop.png')}}" alt="b_drop"> Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection