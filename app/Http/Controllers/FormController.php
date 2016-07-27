<?php

namespace App\Http\Controllers;

use File;
use Storage;
use Illuminate\Http\Request;
use App\Manufacturer;
use App\Retailer;
use App\Procurement;
use App\Sale;
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
        $file = $request->file('supplier_card_image');
        if($file){
        $procurement = new Procurement();
        $procurement->date_of_purchase =  $request->procurement_date;
        $procurement->manufacturer_code = $request->manufacturer_code;
        $procurement->SKU_code = $request->SKU_code;
        $procurement->quantity = $request->quantity;
        $procurement->price_overall = $request->price;
        $procurement->supplier_card_code = $request->supplier_card_code;
        $procurement->supplier_card_name = $request->supplier_card_name;
        $procurement->card_url = 'photos/'.$request->SKU_code.'.jpg';
        $procurement->save();
        Storage::disk('local')->put('photos/'.$request->SKU_code.'.jpg', File::get($file));
        return view('pages.redirectProcurement');
        }
        return 0;        
    }

    public function registerSale(Request $request){
        $sale = new Sale();
        $sale->date_of_sale = $request->date_of_sale;
        $sale->retailer_code = $request->retailer_code;
        $sale->SKU_code = $request->SKU_code;
        $sale->sale_price = $request->sale_price;
        $sale->sale_quantity = $request->sale_quantity;
        $sale->sale_invoice_number = $request->sale_invoice_number;
        $sale->save();
        return 1;
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

    public function findProcurement(Request $request){
        $procurement = Procurement::where('SKU_code',$request->SKU_code)->first();
        if($procurement)
            return $procurement;
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

    public function editProcurement(Request $request){
        Procurement::where('SKU_code',$request->SKU_code)
                   ->update([
                            'date_of_purchase' => $request->procurement_date,
                            'manufacturer_code' => $request->manufacturer_code,
                            'SKU_code' => $request->SKU_code,
                            'quantity' => $request->quantity,
                            'price_overall' => $request->price,
                            'supplier_card_code' => $request->supplier_card_code,
                            'supplier_card_name' => $request->supplier_card_name,
                            ]);
        $file = $request->file('supplier_card_image');
        if($file){
        Storage::disk('local')->put('photos/'.$request->SKU_code.'.jpg', File::get($file));    
        }
    }  
}
