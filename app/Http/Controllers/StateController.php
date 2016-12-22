<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

use Illuminate\Support\Facades\Session;
use App\Http\Requests;


class StateController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $_all = State::all();
        return view('state.index', ['_states' => $_all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('state._new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $_new = new State();

        $_new->name = $request->input('name');
        $_new->save();

        Session::flash('$_message', "State was created successfully");
        return redirect('state');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $_state = State::find($id);
        return $_state; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $_edit = State::find($id);
        return view('state._edit', ['_state' => $_edit]);
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
        $_state = State::find($id);
        $_state->name = $request->input('name');
        $_state->save();

        Session::flash('$_message', "State was updated successfully");
        return redirect('state');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $_state = State::find($id);
        $_state->delete();
        Session::flash('$_message', "State was deleted successfully");
        return redirect('state');
    }
}
