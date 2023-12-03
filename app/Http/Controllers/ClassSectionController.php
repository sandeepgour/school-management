<?php

namespace App\Http\Controllers;

use App\Models\ClassSection;
use Illuminate\Http\Request;
use Datatables;
use App\Models\StudentClass;
use Validator;
use URL;

class ClassSectionController extends Controller
{
     
    public function addSchoolSection()
    {
        return view("admin.views.add_section");
    }

     public function listSchoolSections()
    {
        return view("admin.views.list-sections");
    }

   
    public function saveClassSection(Request $request)
    {
        //print_r($request->all());
        $validator=Validator::make(array(
            'section' =>$request->section_name),
            array("section" => "required|unique:tbl_class_sections")
        );
        if ($validator->fails()) {

            return redirect("add-section")->withErrors($validator)->withInput();
        } else {

            // successfully we have passed our form
            $section = new StudentClass;
            $section->section = $request->section_name;
            $section->status = $request->dd_status;

            $section->save();

            $request->session()->flash("message", "Class Section has been created successfully");

            return redirect("add-section");
        }
    }

    
    public function listAllSections()
    {
         $students_sections = StudentClass::query();
        return Datatables::of($students_sections)
        ->editColumn("action_btns", function($students_sections) {

                            return '<a href="' . URL::to('/edit-section/' . $students_sections->id) . '" class="btn btn-info class-section-edit" data-id="' . $students_sections->id . '">Edit</a>'
                                    . '<a href="javascript:void(0)" class="btn btn-danger class-section-delete" data-id="' . $students_sections->id . '">Delete</a>';
                        })
                        ->editColumn("status", function($students_sections) {

                            if ($students_sections->status) {
                                return '<button class="btn btn-success">Active</button>';
                            } else {
                                return '<button class="btn btn-danger">Inactive</button>';
                            }
                        })
                        ->rawColumns(["action_btns", "status"])
        ->make(true);
    }

   
    public function edit(ClassSection $classSection)
    {
        //
    }

    
    public function update(Request $request, ClassSection $classSection)
    {
        //
    }

    public function destroy(ClassSection $classSection)
    {
        //
    }
}
