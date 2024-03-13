@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-3 py-4">Employees List</h1>
        <div class="list-group company-list">
            @foreach ($employees as $employee)
                <a href="/employees/{{ $employee->id }}" 
                    class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $employee->first_name . " " . $employee->last_name }} 
                    <span class="badge text-bg-primary rounded-pill">More Details</span>
                </a>
            @endforeach
        </div>
    </div>
@endsection