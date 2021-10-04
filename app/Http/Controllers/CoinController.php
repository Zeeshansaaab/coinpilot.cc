<?php

namespace App\Http\Controllers;

use App\Models\coin;
use Illuminate\Http\Request;

class CoinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addcoin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function show(coin $coin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function edit(coin $coin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coin $coin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function destroy(coin $coin)
    {
        //
    }
}
