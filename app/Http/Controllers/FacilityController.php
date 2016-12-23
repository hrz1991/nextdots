<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;

use Illuminate\Support\Facades\Session;
use App\Http\Requests;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $_all = Facility::all();
        return view('facility.index', ['_facilities' => $_all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facility._new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $_new = new Facility();

        $_new->name = $request->input('name');
        $_new->save();

        Session::flash('$_message', "Facility was created successfully");
        return redirect('facility');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $_facility = Facility::find($id);
        return $_facility; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $_edit = Facility::find($id);
        return view('facility._edit', ['_facility' => $_edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $_facility = Facility::find($id);
        $_facility->name = $request->input('name');
        $_facility->save();

        Session::flash('$_message', "Facility was updated successfully");
        return redirect('facility');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $_facility = Facility::find($id);
        $_facility->delete();
        Session::flash('$_message', "Facility was deleted successfully");
        return redirect('facility');
    }
}
