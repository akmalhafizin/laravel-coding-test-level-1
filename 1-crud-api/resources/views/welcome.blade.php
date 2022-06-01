@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>The Homepage for Event</p>
                <br>
                <a href="/event" class="btn btn-outline-primary">Show Events</a>
            </div>
        </div>
    </div>
@endsection