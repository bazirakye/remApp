@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                      <div class="list-group">
                        <a class="list-group-item list-group-item-action bg-success pt-3 text-light" aria-current="true">
                            MENU
                        </a>
                        <a href="{{ route('update-db') }}" class="list-group-item list-group-item-action " aria-current="true">
                            Update Client Database
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">Upcoming Appoinments</a>
                        <a href="#" class="list-group-item list-group-item-action">View Patients</a>
                        <a href="#" class="list-group-item list-group-item-action">Send Custom SMS</a>
                        <a href="#" class="list-group-item list-group-item-action ">Logout</a>
                      </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-success text-light pt-3 pb-2">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   <p>Dashboard</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
