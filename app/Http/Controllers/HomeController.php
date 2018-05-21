<?php

namespace App\Http\Controllers;
// namespace App\Mail;

use App\Ride;
use App\BookedRide;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return DB::table('rides')
        //             ->join('rides','bookedride.ride_id')
        //             ->latest()
        //             ->get();
         $bookedride=BookedRide::where('traveller_id',Auth::user()->id)->pluck('ride_id')->all();

         $rides= Ride::with(['user']) ->whereNotIn('id',$bookedride)->latest()->get();
        $updatedRides=[];
        foreach ($rides as $ride) {
            # code...
            $date=date_create($ride->travelDateTime);
            $travelDateTime= date_format($date,'Y-m-d H:i:s');
            $currentTime=date("Y-m-d H:i:s");
            if ($travelDateTime>=$currentTime) {
                array_push($updatedRides,$ride);
            }
        }
        return view('home',['rides'=>$updatedRides]);
    }

    public function personBookRide(Request $request){
            $loggedInuserEmail=Auth::user()->email;

            $origin=Ride::with('user')->where('id',$request->id)->first()->origin;

            $destination=Ride::with('user')->where('id',$request->id)->first()->destination;

            $capacity=Ride::with('user')->where('id',$request->id)->first()->capacity;

            $postedBy=Ride::with('user')->where('id',$request->id)->first()->user->username;

            $bookedride= new BookedRide;
            $bookedride->ride_id=$request->id;
            $bookedride->traveller_id=Auth::user()->id;
            $bookedride->save();

            $title="Ride Booking Confirmation";
            $content="You Have Successfully booked for a ride from " .$origin." to " .$destination .". Your Driver's Name is ".$postedBy . " and the capacity of the vehicle is " .$capacity ." ."; 
            Mail::send('emails.send', ['title'=>$title,'content'=>$content], function($message) 
                use($loggedInuserEmail) {
                $message->from('noreply@gmail.com','Ride App');
                $message->to($loggedInuserEmail)->subject('Ride Booking Confirmation');
            });

            return response()->json(['message' => 'Request completed' ,'status'=>'success']);
    
    }
}
