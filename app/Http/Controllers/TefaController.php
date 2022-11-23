<?php

namespace App\Http\Controllers;

use App\Models\Tefa;
use Illuminate\Http\Request;

class TefaController extends Controller
{
    public function home()
    {
        return view('dashboard.home');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main');
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
     * @param  \App\Models\Tefa  $tefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tefa $tefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tefa  $tefa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tefa $tefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tefa  $tefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tefa $tefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tefa  $tefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tefa $tefa)
    {
        //
    }
}
