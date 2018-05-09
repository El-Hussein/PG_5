<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PlayGround;
use App\BooknigDates;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getPG()
    {
        $pgs = PlayGround::all();
        return $pgs;
    }

    public function pgs(){
        $pgs = PlayGround::all();
        return view('pgs')->with('pgs', $pgs);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
 
    public function footer(){
        $counter=User::count();
        $background = PlayGround::all();
        return view('welcome')->with('counter',$counter)->with('background', $background);
    }

    public function play_ground(Request $request){
        $available_times = BooknigDates::where(['pg_id'=>$request->pg_id, 'date'=>$request->day])->get();
        $at = [];
        // return $available_time;
        foreach($available_times as $available_time){
            for($i=0; $i<=($available_time->duration); ++$i){
                $at[] = $available_time->from + $i + 0.0;
                $at[] = $available_time->from + $i + 0.5;
            }
        }
        return $at;
   }
    public function book_play_ground(Request $request){
        $newBook = new BooknigDates();
        $available_times = BooknigDates::where(['pg_id'=>$request->pg_id, 'date'=>$request->day])->get();
        $at = [];
        foreach($available_times as $available_time){
            for($i=0; $i<=($available_time->duration); ++$i){
                $at[] = $available_time->from + $i + 0.0;
                $at[] = $available_time->from + $i + 0.5;
            }
        }
        $start = $request->date;
        for($j=0; $j<($request->duration); ++$j){
            if(in_array($start+$j+0.0 ,$at) || in_array($start+$j+0.5 ,$at)){
                return "Sorry you can't book in this time choose another one.";
            }
        }
        $newBook->pg_id = $request->pg_id;
        $newBook->from = $request->date;
        $newBook->date = $request->day;
        $newBook->user_id = Auth::user()->id;
        $newBook->duration = $request->duration;
        $newBook->save();
        return "Booked Successfully.";
   }


}
