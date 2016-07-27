<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home(){
    	return view('pages.register_homepage');
    }

    public function registerManufacturer(){
    	return view('forms.manufacturer_register');
    }

    public function editManufacturer(){
    	return view('forms.manufacturer_edit');
    }
    
    public function registerRetailer(){
    	return view('forms.retailer_register');
    }

    public function editRetailer(){
    	return view('forms.retailer_edit');
    }

    public function registerProcurement(){
        return view('forms.procurement_register');
    }

    public function editProcurement(){
        return view('forms.procurement_edit');
    }
    public function registerCard(){
        return view('forms.card_register');
    }
    public function editCard(){
        return view('forms.card_edit');
    }
    public function registerSale(){
        return view('forms.sale_register');
    }
    public function editSale(){
        return view('forms.sale_edit');
    }
}
