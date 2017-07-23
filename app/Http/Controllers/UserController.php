<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){
    	
    	$validator = Validator::make($request->all(), [

    		'name' => 'required',
    		'email' => 'required',
    		'password' => 'required',
            'cpf' => 'required',
            'address' => 'required',
            'telephone' => 'required',

    	]);

    	User::create([

    		'name' => $request['name'],
    		'email' => $request['email'],
    		'password' => $request['password'],
            'cpf' => $request['cpf'],
            'address' => $request['address'],
            'telephone' => $request['telephone'],

    	]);

    	return back();
}
