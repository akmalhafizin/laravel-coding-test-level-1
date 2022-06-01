@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/event" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ucfirst($event->id) }}</h1>
                <p>{!! $event->name !!}</p>
                <p>{!! $event->slug !!}</p>
                <p>{!! $event->created_at !!}</p>
                <p>{!! $event->updated_at !!}</p> 
                <hr>
                <a href="/event/{{ $event->id }}/edit" class="btn btn-outline-primary">Edit Event</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Event</button>
                </form>
            </div>
        </div>
    </div>
@endsection