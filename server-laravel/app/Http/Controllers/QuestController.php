<?php

namespace App\Http\Controllers;

use App\Quest;
use Illuminate\Http\Request;

class QuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Quest::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quest = new Quest($request->all());
        $quest->save();

        return response()->json($quest, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quest  $quest
     * @return \Illuminate\Http\Response
     */
    public function show(Quest $quest)
    {
        return response()->json($quest, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quest  $quest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quest $quest)
    {
        $quest->fill($request->all());
        $quest->update();

        return response()->json($quest, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quest  $quest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quest $quest)
    {
        $quest->delete();
        return response()->json('', 204);
    }
}
