<?php

namespace App\Http\Controllers\Api;

use App\Models\Caster;
use Illuminate\Http\Request;

class CasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Caster::all();
        $response = [
            'data' => $data,
            'message' => 'Get list successfully',
            'success' => true
        ];
        return response($response);
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
     * @param  \App\Models\Caster  $caster
     * @return \Illuminate\Http\Response
     */
    public function show(Caster $caster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caster  $caster
     * @return \Illuminate\Http\Response
     */
    public function edit(Caster $caster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caster  $caster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caster $caster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caster  $caster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caster $caster)
    {
        //
    }
}
