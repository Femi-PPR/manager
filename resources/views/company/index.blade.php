@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-3 py-4">Companies List</h1>
        <div class="list-group company-list">
            @foreach ($companies as $company)
                <a href="/companies/{{ $company->id }}" 
                    class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $company->name }} 
                    <span class="badge text-bg-primary rounded-pill">More Details</span>
                </a>
            @endforeach
        </div>
    </div>
@endsection