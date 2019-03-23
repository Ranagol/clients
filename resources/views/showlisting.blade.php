@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$listing->name}}<a class="float-right btn btn-info" href="/listings">Go back</a></div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Adress: {{$listing->address}}</li>
                        <li class="list-group-item">Website: {{$listing->website}}</li>
                        <li class="list-group-item">Email: {{$listing->email}}</li>
                        <li class="list-group-item">Phone: {{$listing->phone}}</li>
                        <li class="list-group-item">Bio: {{$listing->bio}}</li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>

@endsection