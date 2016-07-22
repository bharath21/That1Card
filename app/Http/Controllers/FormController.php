<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;
use App\Retailer;
use App\Http\Requests;

class FormController extends Controller
{ 
	public function registerManufacturer(Request $request){
    	$manufacturer = new Manufacturer();
    	$manufacturer->manufacturer_code = $request->manufacturer_code;
    	$manufacturer->manufacturer_name = $request->manufacturer_name;
    	$manufacturer->manufacturer_TINno = $request->manufacturer_TINno;
    	$manufacturer->manufacturer_CSTno = $request->manufacturer_CSTno;
    	$manufacturer->manufacturer_email = $request->manufacturer_email;
    	$manufacturer->manufacturer_phone = $request->manufacturer_phone;
    	$manufacturer->manufacturer_address = $request->manufacturer_address;
    	$manufacturer->save();
    	return view('pages.redirectManufacturer');
    }

    public function registerRetailer(Request $request){
        $retailer = new Retailer();
        $retailer->retailer_code = $request->retailer_code;
        $retailer->retailer_name = $request->retailer_name;
        $retailer->retailer_TINno = $request->retailer_TINno;
        $retailer->retailer_CSTno = $request->retailer_CSTno;
        $retailer->retailer_email = $request->retailer_email;
        $retailer->retailer_phone = $request->retailer_phone;
        $retailer->retailer_address = $request->retailer_address;
        $retailer->save();
        return view('pages.redirectRetailer');
    }

    public function registerProcurement(Request $request){
        $file = $request->file('photo');
        if($file){
        $photo = new Photo;
        $photo->photo_name = $request->photo_name;
        $photo->album = $request->album;
        $photo->save();

        $photo_id = Photo::latest()->pluck('id'); 
        //Yaaay!!
        Storage::disk('local')->put('photos/'.$photo_id.'.jpg', File::get($file));
        return 1;
        }
        return 0;
    }

    public function findManufacturer(Request $request){
        $manufacturer = Manufacturer::where('manufacturer_code',$request->manufacturer_code)->first();
        if($manufacturer)
            return $manufacturer;
        else 
            return 0;
    }

    public function findRetailer(Request $request){
        $retailer = Retailer::where('retailer_code',$request->retailer_code)->first();
        if($retailer)
            return $retailer;
        else 
            return 0;
    }

    public function editManufacturer(Request $request){
        Manufacturer::where('manufacturer_code',$request->manufacturer_code)
                    ->update([
                            'manufacturer_code' => $request->manufacturer_code,
                            'manufacturer_name' => $request->manufacturer_name,
                            'manufacturer_TINno' => $request->manufacturer_TINno,
                            'manufacturer_CSTno' => $request->manufacturer_CSTno,
                            'manufacturer_email' => $request->manufacturer_email,
                            'manufacturer_phone' => $request->manufacturer_phone,
                            'manufacturer_address' => $request->manufacturer_address,
                        ]);
        return 1;
    }

    public function editRetailer(Request $request){
        Retailer::where('retailer_code',$request->retailer_code)
                ->update([
                            'retailer_code' => $request->retailer_code,
                            'retailer_name' => $request->retailer_name,
                            'retailer_TINno' => $request->retailer_TINno,
                            'retailer_CSTno' => $request->retailer_CSTno,
                            'retailer_email' => $request->retailer_email,
                            'retailer_phone' => $request->retailer_phone,
                            'retailer_address' => $request->retailer_address,
                        ]);
        return 1;

    }

}
