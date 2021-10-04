<?php

namespace App\Http\Controllers;

use App\Models\nft;
use Illuminate\Http\Request;

class NftController extends Controller
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
        return view('addnft');
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
     * @param  \App\Models\nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function show(nft $nft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function edit(nft $nft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nft $nft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function destroy(nft $nft)
    {
        //
    }
}
