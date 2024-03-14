@extends('layouts.app')

@section('content')
    <div class="container">
        <div
            class="row justify-content-center align-items-center g-2"
        >
            <div class="col-4"><img src="{{ asset('backgrounds/raphael--employee.svg') }}" class="object-fit-cover img-thumbnail w-100 h-100" alt=""></div>
            <div class="col-8">
                <!-- Hover added -->
                <div class="list-group list-group-flush">
                    <h1 class="list-group-item display-3 py-4">{{ $employee->first_name . " " . $employee->last_name }}</h1>
                    <p class="list-group-item">
                        @if (isset($employee->company))
                            Works for {{ $employee->company->name }}
                        @else
                            Is a Free Agent
                        @endif
                    </p>
                    <p class="list-group-item">Email: {{ $employee->email }}</p>
                    <p class="list-group-item">Phone Number: {{ $employee->telephone }}</p>
      
                </div>
                
            </div>
        </div>
    </div>
@endsection