<?php

namespace App\Http\Controllers;

use App\Organization;
use App\School;
use App\Stadium;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Holds the value of all players to be displayed
        $organizations = Organization::all();

        //Gives the view of all the players
        return view('organizations.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('organizations.create');
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
        //Validating the data
        $this->validate(request(), [
            'organizationName' => 'required|max:50',
        ]);

        $organizations = new organization;

        $organizations->organizationName = $request->organizationName;

        $organizations->save();

        //Flashing a message to confirm that a team has been entered into the database
        session()->flash('message', 'organization has been inserted');                
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $organization = Organization::find($request->organizationId);

        // must find teams by schoolId        
        // needs to return a collection or it wont work
        $schools = School::all()->where('organizationId', $request->organizationId);

        $stadiums = Stadium::all()->where('organizationId', $request->organizationId);

        
        //dd($school);
        return view('organizations.show', compact(['organization', 'schools', 'stadiums']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }
}