<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConstructController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('constructs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('constructs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $con = new \App\Construct;
        $con->user_id = \Auth::id();
        $con->title = $request->input('title_input');
        $con->class = $request->input('class_input');
        $con->gender = $request->input('gender_input');
        $con->gift = $request->input('gift_input');
        $con->covenant = $request->input('cov_input');
        $con->soul_level = $request->input('soul_input');
        $con->save();

        $request->session()->flash('status', 'Your construct was saved.');
        return view('constructs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'This view will display an in-depth look at a specific construct';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $con = \App\Construct::find($id);
        return view('constructs.edit', compact('con'));
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
        $con = \App\Construct::find($id);
        $con->title = $request->input('title_input');
        $con->class = $request->input('class_input');
        $con->gender = $request->input('gender_input');
        $con->gift = $request->input('gift_input');
        $con->covenant = $request->input('cov_input');
        $con->soul_level = $request->input('soul_input');
        $con->save();

        $request->session()->flash('status', 'Your construct was updated.');
        return view('constructs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $con = \App\Construct::find($id);
        $con->delete();
        $request->session()->flash('status', 'Your construct was deleted.');
        return view('constructs.index');
    }
}
