<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlayGround;
use App\PlayGround_Images;
use App\PlayGround_Owner;

class AdminController extends Controller
{
    public function AddNewPG(Request $request){
    	$pg = new PlayGround();
    	$pg->name = $request->pg_name; 
    	$pg->region = $request->pg_region; 
    	$pg->owner_name = $request->pg_owner_name; 
    	$pg->contact_phone = $request->pg_contact_phone; 
    	$pg->start_work = $request->pg_start_work; 
    	$pg->end_work = $request->pg_end_work; 
    	$pg->day_price = $request->pg_day_price; 
    	$pg->night_price = $request->pg_night_price;
    	if($request->hasFile('pg_image_profile')){
            $filename = time().'.'.$request->file('pg_image_profile')->getClientOriginalExtension();
            request()->pg_image_profile->move(public_path('uploads'), $filename);
        }else{
            $filename = 'default.jpeg';
        }
        $pg->profile_image = $filename;
        $pg->lat = $request->lat;
        $pg->lng = $request->lng;
        $pg->save();

        $pg_owner = new PlayGround_Owner();
        $pg_owner->username = $request->pg_username;
        $pg_owner->password = $request->pg_password;
        $pg_owner->pg_id = $pg->id;
        $pg_owner->save();

        $photos = $request->file('images');
        if(isset($photos)){
    	    foreach ($photos as $photo) {
    	        $extension = $photo->getClientOriginalExtension();
    	        $filename  = 'PG_Photo_' . time() . '.' . $extension;
    	        $photo->move(public_path('uploads'), $filename);
    	        $pg_image = new PlayGround_Images();
    	        $pg_image->image = $filename;
    	        $pg_image->pg_id = $pg->id;
    	        $pg_image->save();
    	    }
        }
    	return $request;
    }
}
