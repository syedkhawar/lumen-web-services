<?php 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Event extends Model
{ 	
	protected $table = "events";
 	protected $fillable = ['event_title', 'name', 'date_of_event', 'date_of_reminder', 'location'];	 
}
