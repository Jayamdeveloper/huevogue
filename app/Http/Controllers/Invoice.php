<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Invoice extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin-invoice.list");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin-invoice.add");
    }
    public function view()
    {
        return view("admin-invoice.view");
    }
    public function print()
    {
        return view("admin-invoice.print");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id = null)
    {
        return view("admin-invoice.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
