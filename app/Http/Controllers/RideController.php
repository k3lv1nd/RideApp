<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ride;
use App\BookedRide;
use Auth;
use Carbon\Carbon;

class RideController extends Controller
{
    public function postRide(Request $request){
        if ($request->isMethod('GET')) {
            return view('post-ride');
        }else if($request->isMethod('POST')){

            date_default_timezone_set('Africa/Nairobi');
            $travelDate= $request->travelDate  ." ". $request->startTime  . ":00:00" ;
            $date =strtotime($travelDate);
            $now=date("d/M/Y H:i:s");

            if ($date<=$now) {
                # code...
                $notification=array(
                    'message'=>'Kindly Enter a Date In The Future',
                    'alert-type'=>'success'
                );
                return redirect()->back()->with($notification)->withInputs();
            }

            // return date("d/M/Y H:i:s");

            // 26/May/2018 06:00:00
            // 19/May/2018 19:43:10

            $ride= new Ride;
            $ride->origin =$request->origin;
            $ride->destination =$request->destination;
            $ride->capacity =$request->capacity;
            $ride->user_id =Auth::user()->id;
            $ride->status ="Available";
            $ride->travelDateTime=$travelDate;
            $ride->save();

            $notification=array(
                'message'=>'Ride Successfully Added!',
                'alert-type'=>'success'
            );
            return redirect('/home')->with($notification);
        }
    }

    public function viewMyRides(){
         $bookedride=BookedRide::where('traveller_id',Auth::user()->id)->pluck('ride_id')->all();

         $rides= Ride::with(['user']) ->whereIn('id',$bookedride)->latest()->get();
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
        return view('viewMyRides',['rides'=>$updatedRides]);
    }

}
