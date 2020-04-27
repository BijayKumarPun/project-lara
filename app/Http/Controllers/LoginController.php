<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
class LoginController extends Controller
{
     
 
public function login(Request $request ){
return "Hello from Login";	}


public function listAllData(){
	$data=Person::all();
	return $data;
}}
