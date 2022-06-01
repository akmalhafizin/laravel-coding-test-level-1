@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Our Events!</h1>
                        <p>Click on a event to expand!</p>
                    </div>
                    <div class="col-4">
                        <p>Create new Event</p>
                        <a href="/event/create/event" class="btn btn-primary btn-sm">Add Event</a>
                    </div>
                </div>                
                @forelse($events as $event)
                    <ul>
                        <li><a href="./event/{{ $event->id }}">{{ ucfirst($event->name) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No Events available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection