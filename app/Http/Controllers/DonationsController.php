<?php

namespace App\Http\Controllers;

use App\Donations;
use Illuminate\Http\Request;
use DB;
class DonationsController extends Controller
{
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
        //
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
     * @param  \App\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function show($requestId)
    {
        //
        $donation = DB::table('donations')
        ->join("users","donations.user_id","users.id")
        ->join("profiles","profiles.user_id","users.id")
        ->where("request_id",$requestId);
        return $donation->get();

        // return Donations::with("users")->get();


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function edit(Donations $donations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donations $donations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donations $donations)
    {
        //
    }
}
