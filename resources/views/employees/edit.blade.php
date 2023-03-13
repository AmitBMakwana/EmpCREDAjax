@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Employee</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('employees.update', $employee->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name', $employee->name) }}" required autocomplete="name"
                                    autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email', $employee->email) }}" required
                                    autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror"
                                    name="age" value="{{ old('age', $employee->age) }}" required autocomplete="age">

                                @error('age')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="salary" class="col-md-4 col-form-label text-md-right">Salary</label>

                            <div class="col-md-6">
                                <input id="salary" type="number" step="0.01"
                                    class="form-control @error('salary') is-invalid @enderror" name="salary"
                                    value="{{ old('salary', $employee->salary) }}" required autocomplete="salary">

                                @error('salary')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">Department</label>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="department"
                                        class="col-md-4 col-form-label text-md-right">Department</label>

                                    <div class="col-md-6">
                                        <select id="department"
                                            class="form-control @error('department') is-invalid @enderror"
                                            name="department" required>
                                            <option value="">Select Department</option>
                                            <option value="HR"
                                                {{ old('department', $employee->department) == 'HR' ? 'selected' : '' }}>
                                                HR</option>
                                            <option value="IT"
                                                {{ old('department', $employee->department) == 'IT' ? 'selected' : '' }}>
                                                IT</option>
                                            <option value="Sales"
                                                {{ old('department', $employee->department) == 'Sales' ? 'selected' : '' }}>
                                                Sales</option>
                                        </select>
                                        @error('department')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="profile_pic" class="col-md-4 col-form-label text-md-right">Profile
                                        Picture</label>

                                    <div class="col-md-6">
                                        <input id="profile_pic" type="file"
                                            class="form-control-file @error('profile_pic') is-invalid @enderror"
                                            name="profile_pic" accept="image/*">

                                        @if($employee->profile_pic)
                                        <div class="mt-3">
                                            <img src="{{ asset('storage/' . $employee->profile_pic) }}"
                                                alt="{{ $employee->name }}"
                                                style="max-width: 200px; max-height: 200px;">
                                        </div>
                                        @endif

                                        @error('profile_pic')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Update
                                        </button>
                                        <a href="{{ route('employees.index') }}" class="btn btn-secondary">
                                            Cancel
                                        </a>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection