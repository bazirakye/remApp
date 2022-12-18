@extends('layouts.app')

@section('title', 'Update Database')

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
                        <a href="{{ route('upcoming-appointments') }}" class="list-group-item list-group-item-action">Upcoming Appoinments</a>
                        <a href="{{ route('list-patient') }}" class="list-group-item list-group-item-action">View Patients</a>
                        <a href="#" class="list-group-item list-group-item-action">Send Custom SMS</a>
                        <a href="#" class="list-group-item list-group-item-action">Logout</a>
                      </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card"  style="min-height: 500px">
                <div class="card-header bg-success d-flex justify-content-between">
                    <h4 class="text-light">Update Database</h3>
                    <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addSingle">New Patient</button>
                </div>
                <div class="card-body text-center">
                    <h4>Upload your excel file to update database</h4>

                    @livewire('upload-file')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
