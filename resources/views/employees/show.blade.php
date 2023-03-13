@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Employee Details</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $employee->name }}</h5>
                    <p class="card-text">Email: {{ $employee->email }}</p>
                    <p class="card-text">Age: {{ $employee->age }}</p>
                    <p class="card-text">Salary: {{ $employee->salary }}</p>
                    <p class="card-text">Department: {{ $employee->department }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('storage/'.$employee->profile_pic) }}" alt="{{ $employee->name }}" class="img-fluid">
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary mr-2">Edit</a>
        <button class="btn btn-danger btn-delete" data-id="{{ $employee->id }}">Delete</button>
    </div>
</div>
@endsection