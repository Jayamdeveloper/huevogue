<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Informativepages  extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $policy = Policy::all();
        return view("informative-pages.privacypolicy", compact('policy'));
    }

    public function termsandconditions()
    {
        $policy = Policy::all();
        return view("informative-pages.termsconditions", compact('policy'));
    }

    public function cancellationrefundpolicy()
    {
        $policy = Policy::all();
        return view("informative-pages.cancellationrefundpolicy", compact('policy'));
    }
    public function savePrivacy(Request $request)
    {

        $validator =   Validator::make(
            $request->all(),
            [
                'productTitle' => 'required|string',
                'productDescription' => 'required|string',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Validation failed. Please check the form inputs.');
        }
        $policy = Policy::find(1);
        $policy->type = $request->productTitle;
        $policy->content = $request->productDescription;
        if ($policy->save()) {
            return redirect()->back()->with('success', 'Privacy Policy saved successfully.');
        } else {
            return redirect()->back()->with('error', 'Server not responding.');
        }
    }
    public function saveTerms(Request $request)
    {

        $validator =   Validator::make(
            $request->all(),
            [
                'productTitle' => 'required|string',
                'productDescription' => 'required|string',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Validation failed. Please check the form inputs.');
        }
        $policy = Policy::find(2);
        $policy->type = $request->productTitle;
        $policy->content = $request->productDescription;
        if ($policy->save()) {
            return redirect()->back()->with('success', 'Terms and Conditions saved successfully.');
        } else {
            return redirect()->back()->with('error', 'Server not responding.');
        }
    }
    public function saveRefund(Request $request)
    {

        $validator =   Validator::make(
            $request->all(),
            [
                'productTitle' => 'required|string',
                'productDescription' => 'required|string',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Validation failed. Please check the form inputs.');
        }
        $policy = Policy::find(3);
        $policy->type = $request->productTitle;
        $policy->content = $request->productDescription;
        if ($policy->save()) {
            return redirect()->back()->with('success', 'Cancellation and Refund Policy saved successfully.');
        } else {
            return redirect()->back()->with('error', 'Server not responding.');
        }
    }
}
