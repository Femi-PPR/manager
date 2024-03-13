@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center g-4 welcome-cards">
            <div class="col">
                <div class="card">
                    <img class="card-img-top object-fit-cover" src="backgrounds/companies.jpg" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">Companies</h4>
                        <a href="/companies" class="btn btn-primary">See All</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img-top object-fit-cover" src="backgrounds/employees.jpg" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">Employees</h4>
                        <a href="/employees" class="btn btn-primary">See All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection