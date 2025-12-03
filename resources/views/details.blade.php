@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Contact details
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Name: {{ $contact->name }}</li>
                        <li class="list-group-item">Email: {{ $contact->email }}</li>
                        <li class="list-group-item">Contact: {{ $contact->contact }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
