<?php

namespace App\Http\Controllers;

use App\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $missions = Mission::all();
        return view('admin.admin-content.mission.index', compact('missions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-content.mission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = \request()->validate([
            'title_bn' => 'required',
            'title_en' => 'required',
            'content_bn' => 'required',
            'content_en' => 'required',
//            'image' => 'required|mimes:jpeg,jpg,png',
        ]);


        Mission::create($inputs);
        session()->flash('create', 'Data Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
        return view('admin.admin-content.mission.edit', compact('mission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mission $mission)
    {
        $inputs = \request()->validate([
            'title_bn' => 'required',
            'title_en' => 'required',
            'content_bn' => 'required',
            'content_en' => 'required',
//            'image' => 'mimes:jpeg,jpg,png',
        ]);

        $mission->update($inputs);
        session()->flash('create', 'Data Updated Successfully');
        return redirect()->route('mission.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
        $mission->delete();
        session()->flash('delete', 'Data Deleted Successfully');

        return redirect()->route("mission.index");
    }
}
