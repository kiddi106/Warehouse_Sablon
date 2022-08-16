<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDummyDataRequest;
use App\Http\Requests\UpdateDummyDataRequest;
use App\Models\DummyData;

class DummyDataController extends Controller
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
     * @param  \App\Http\Requests\StoreDummyDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDummyDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DummyData  $dummyData
     * @return \Illuminate\Http\Response
     */
    public function show(DummyData $dummyData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DummyData  $dummyData
     * @return \Illuminate\Http\Response
     */
    public function edit(DummyData $dummyData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDummyDataRequest  $request
     * @param  \App\Models\DummyData  $dummyData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDummyDataRequest $request, DummyData $dummyData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DummyData  $dummyData
     * @return \Illuminate\Http\Response
     */
    public function destroy(DummyData $dummyData)
    {
        //
    }
}
