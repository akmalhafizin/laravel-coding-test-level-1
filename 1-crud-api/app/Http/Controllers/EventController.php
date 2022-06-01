<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all(); //fetch all events from DB
        return view('event.index', [
            'events' => $events,
        ]); //returns the view with events
    }
    public function activeevents()
    {
        $startDate = Carbon::createFromFormat('d/m/Y', '06/01/2021'); //Set start date
        $endDate = Carbon::createFromFormat('d/m/Y', '06/01/2021'); //Set end date
  
        //  Fetch data in between dates
        $events = Event::select('id', 'name', 'slug', 'created_at')
                        ->whereBetween('created_at', [$startDate, $endDate])
                        ->get();

        return $events; //return the fetched events
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEvent = Event::create([
            'name' => $request->name,
            'slug' => $request->slug
        ]);

        return redirect('event/' . $newEvent->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //return $event; //returns the fetched events

        return view('event.show', [
        'event' => $event,
        ]); //returns the view with the event
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view(event.edit’, [
        event => $event,
        ]); //returns the edit view with the event
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->update([
            'name' => $request->name,
            'slug' => $request->slug
        ]);

        return redirect('event/' . $event->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect('/event');
    }
}
