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
        $con->Vgr = $request->input('vgr');
        $con->Atn = $request->input('atn');
        $con->End = $request->input('end');
        $con->Vit = $request->input('vit');
        $con->Str = $request->input('str');
        $con->Dex = $request->input('dex');
        $con->Int = $request->input('int');
        $con->Fth = $request->input('fth');
        $con->Luck = $request->input('luck');
        $con->Hol = $request->input('hol');
        $con->head = $request->input('head_input');
        $con->chest = $request->input('chest_input');
        $con->hands = $request->input('hands_input');
        $con->legs = $request->input('legs_input');
        $con->ring1 = $request->input('ring1_input');
        $con->ring2 = $request->input('ring2_input');
        $con->ring3 = $request->input('ring3_input');
        $con->ring4 = $request->input('ring4_input');
        $con->lh1 = $request->input('lh1_input');
        $con->lh2 = $request->input('lh2_input');
        $con->lh3 = $request->input('lh3_input');
        $con->rh1 = $request->input('rh1_input');
        $con->rh2 = $request->input('rh2_input');
        $con->rh3 = $request->input('rh3_input');
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
        $con = \App\Construct::find($id);
        return view('constructs.display', compact('con'));
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
        $con->Vgr = $request->input('vgr');
        $con->Atn = $request->input('atn');
        $con->End = $request->input('end');
        $con->Vit = $request->input('vit');
        $con->Str = $request->input('str');
        $con->Dex = $request->input('dex');
        $con->Int = $request->input('int');
        $con->Fth = $request->input('fth');
        $con->Luck = $request->input('luck');
        $con->Hol = $request->input('hol');
        $con->head = $request->input('head_input');
        $con->chest = $request->input('chest_input');
        $con->hands = $request->input('hands_input');
        $con->legs = $request->input('legs_input');
        $con->ring1 = $request->input('ring1_input');
        $con->ring2 = $request->input('ring2_input');
        $con->ring3 = $request->input('ring3_input');
        $con->ring4 = $request->input('ring4_input');
        $con->lh1 = $request->input('lh1_input');
        $con->lh2 = $request->input('lh2_input');
        $con->lh3 = $request->input('lh3_input');
        $con->rh1 = $request->input('rh1_input');
        $con->rh2 = $request->input('rh2_input');
        $con->rh3 = $request->input('rh3_input');
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
        return redirect()->route('home');
    }
}
