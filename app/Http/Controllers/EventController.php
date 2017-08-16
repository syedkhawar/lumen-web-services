<?php

namespace App\Http\Controllers;
 
use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class EventController extends Controller{

	public function createEvent(Request $request){
 
    	$event = Event::create($request->all());
 
    	return response()->json($event);
 
	}
 
	public function updateEvent(Request $request, $id){

    	$event  = Event::find($id);
    	$event->event_title = $request->input('event_title');
    	$event->name = $request->input('name');
    	$event->date_of_event = $request->input('date_of_event');
    	$event->date_of_reminder = $request->input('date_of_reminder');
    	$event->location = $request->input('location');
    	$event->save();
 
    	return response()->json($event);
	}  

	public function deleteEvent($id){
    	$event  = Event::find($id);
    	if (!$event) {
    		return response()->json("Event not Found");
    	}
    	$event->delete();
 
    	return response()->json('Removed successfully.');
	}

	public function index(){
 
    	return $events  = Event::orderBy('id', 'DESC')->get();
 
    	return response()->json($events);
 
	}
}
?>