<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Facilities;
use App\Models\State;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $_all = Property::all();
        return view('property.index', ['_properties' => $_all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $_facilities = Facilities::all();
        $_states = State::all();
        return view('property._new', ['_facilities' => $_facilities, '_states' => $_states]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $_new = new Property();

        $_new->title = $request->input('title');
        $_new->description = $request->input('description');
        $_new->address = $request->input('address');
        $_new->town = $request->input('town');
        $_new->county = $request->input('county');
        $_new->country = $request->input('country');
        $_new->state_id = $request->input('state_id');

        $_new->save();

        foreach ($request->input('facilities') as $facility) {
            DB::table('properties_facilities')->insert(
                ['property_id' => $_new->id, 'facilities_id' => $facility]
            );
        }

        Session::flash('$_message', "Property was deleted successfully");
        return redirect('property');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $_property = Property::find($id);
        return $_property; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $_facilities = Facilities::all();
        $_states = State::all();

        $_edit = Property::find($id);
        return view('property._edit', ['_property' => $_edit, '_facilities' => $_facilities, '_states' => $_states]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $_property = Property::find($id);
        $_property->delete();
        Session::flash('$_message', "Property was deleted successfully");
        return redirect('property');
    }
}
