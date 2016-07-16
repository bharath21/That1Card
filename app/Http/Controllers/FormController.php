<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;
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
}
