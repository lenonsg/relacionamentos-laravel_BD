<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request){
    	
    	$validator = Validator::make($request->all(), [

    		'name' => 'required',
    		'price' => 'required',
    		'image' => 'required',
            'type' => 'required',
            'bar_code' => 'required',
            'quantity_in_stock' => 'required',

    	]);

    	Product::create([

    		'name' => $request['name'],
    		'price' => $request['price'],
    		'image' => $request['image'],
            'type' => $request['type'],
            'bar_code' => $request['bar_code'],
            'quantity_in_stock' => $request['quantity_in_stock'],

    	]);

    	return back();
}
