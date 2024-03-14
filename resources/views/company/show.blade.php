@extends('layouts.app')

@section('content')
    <div class="container">
        <div
            class="row justify-content-center align-items-center g-2"
        >
            <div class="col-4"><img src="https://picsum.photos/900/901" class="object-fit-cover img-thumbnail w-100 h-100" alt=""></div>
            <div class="col-8">
                <!-- Hover added -->
                <div class="list-group list-group-flush">
                    <h1 class="list-group-item display-3 py-4">{{ $company->name }}</h1>
                    @isset($company->email)  
                    <p class="list-group-item">Email: {{ $company->email }}</p>
                    @endisset
                    @isset($company->website)  
                    <p class="list-group-item">Website: {{ $company->website }}</p>
                    @endisset
      
                </div>
                
            </div>
        </div>
        <h1 class="display-6 pt-5 pb-2">Employees</h1>
        <div class="list-group">
            @if ($company->employees->count() > 0)
                @foreach ($company->employees as $employee)
                    <a href="/employees/{{ $employee->id }}" 
                        class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $employee->first_name . " " . $employee->last_name}} 
                    </a>
                @endforeach
            @else
                <p class="fs-5">This company has no employees</p>
            @endif
        </div>
    </div>
@endsection