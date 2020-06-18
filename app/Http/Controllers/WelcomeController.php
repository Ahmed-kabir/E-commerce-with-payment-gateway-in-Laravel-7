<?php

namespace App\Http\Controllers;

use App\Welcome;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main_content');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        return view('cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkout($ammount)
    {
        $data['total_ammount'] = $ammount;
        // dd($data['total_ammount']);
        return view('checkout', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function success()
    {
        return view('success');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function category()
    {
        return view('category');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        return view('details');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Welcome $welcome)
    {
        //
    }
}
