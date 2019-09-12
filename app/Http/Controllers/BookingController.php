<?php
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\booking;
class BookingController extends Controller
{
	// list all bookings
    public function booking(){
    	return response()->Json(booking::get());}
//creating booking request
    	public function addbooking(Request $request){
/*			$booking = booking::create($request->all());*/
  			$booking=booking::create([
      		'name' => $request['name'],
        	'email' => $request['email'],
        	'car_type' => $request['car_type'],
        	'status' => 'pending',
        	'booking_reference' => Str::random(10),
        		]);
    	return response()->Json($booking->booking_reference,201);}
    	// Deleting booking request using booking reference
    	public function deletebooking($booking_reference){
    		
    booking::where('booking_reference',$booking_reference)->delete();
    	
    		return response()->json('has deleted');
    	}
    	public function updatebooking($booking_reference){
    		
    booking::where('booking_reference',$booking_reference)->update(['status'=>'accepted']);
    	
    		return response()->json('has updated');
    	}
}
/*		