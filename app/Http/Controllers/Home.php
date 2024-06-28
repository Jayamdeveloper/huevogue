<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\HomeInfo;
use App\Models\HomeSlider;
use App\Models\HomeCollection;

class Home extends Controller
{

    public function index()
    {
        $home = HomeInfo::where('id',1)->first();
        $slider = HomeSlider::get();
        $collection = HomeCollection::first();
        $products = Product::where('status',1)->get();
        return view("index",compact('products','home','slider','collection'));
    }

    public function profile()
    {
        return view("myprofile");
    }

    public function checkout()
    {
        return view("checkout");
    }
    public function privacyPolicy()
    {
        return view("privacy-policy");
    }
    public function termsAndConditions()
    {
        return view("terms-and-conditions");
    }

    public function refundPolicy()
    {
        return view("refund-policy");
    }


}