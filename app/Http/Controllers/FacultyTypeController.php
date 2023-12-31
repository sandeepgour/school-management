<?php

namespace App\Http\Controllers;

use App\Models\FacultyType;
use Illuminate\Http\Request;

class FacultyTypeController extends Controller
{
    
    public function addFacultyType()
    {
        return view("admin.views.add_Faculty_Type");
    }


     public function listFacultyTypes() {

        return view("admin.views.list_faculties_type");
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
     * @param  \App\Models\FacultyType  $facultyType
     * @return \Illuminate\Http\Response
     */
    public function show(FacultyType $facultyType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FacultyType  $facultyType
     * @return \Illuminate\Http\Response
     */
    public function edit(FacultyType $facultyType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FacultyType  $facultyType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FacultyType $facultyType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FacultyType  $facultyType
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacultyType $facultyType)
    {
        //
    }
}
