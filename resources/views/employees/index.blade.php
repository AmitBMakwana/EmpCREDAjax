@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Employees</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Age</th>
                                <th>Salary</th>
                                <th>Department</th>
                                <th>Profile Pic</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->age }}</td>
                                <td>{{ $employee->salary }}</td>
                                <td>{{ $employee->department }}</td>
                                <td>
                                    @if($employee->profile_pic)
                                    <img src="{{ $employee->profile_pic }}" width="50" height="50">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('employees.show', $employee->id) }}"
                                        class="btn btn-primary">View</a>
                                    <a href="{{ route('employees.edit', $employee->id) }}"
                                        class="btn btn-success">Edit</a>
                                    <button class="btn btn-danger delete-employee"
                                        data-id="{{ $employee->id }}">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('.delete-employee').click(function() {
        let id = $(this).data('id');
        if (confirm('Are you sure you want to delete this employee?')) {
            $.ajax({
                url: "{{ url('employees') }}" + '/' + id,
                type: 'DELETE',
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    alert(response.success);
                    window.location.reload();
                }
            });
        }
    });
});
</script>
@endsection