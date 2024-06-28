<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerManagement extends Controller
{
    public function index(){
        
        return view('customer-management.customermanagement');
    } 
}