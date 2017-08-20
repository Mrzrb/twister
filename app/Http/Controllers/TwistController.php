<?php

namespace App\Http\Controllers;

use App\Twist;
use Illuminate\Http\Request;

class TwistController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $twists = Twist::all();

        return view('index',compact('twists'));
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
     * @param  \App\Twist  $twist
     * @return \Illuminate\Http\Response
     */
    public function show(Twist $twist)
    {
        $replies = $twist->replies;
        return view('show',compact('twist','replies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Twist  $twist
     * @return \Illuminate\Http\Response
     */
    public function edit(Twist $twist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Twist  $twist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Twist $twist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Twist  $twist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Twist $twist)
    {
        //
    }
}
