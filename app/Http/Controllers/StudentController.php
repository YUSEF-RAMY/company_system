<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::all();
        return view('students.index')->with('allstudents',$student);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student -> studentname = $request -> fullname;
        $student -> studentemail = $request -> email;
        $student -> studentnumber = $request -> phone;
        $student->save();
        return redirect('allstudent')->with('save_done','student is inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $studentid)
    {
        $student = Student::find($studentid);
        return view('students.edit')->with('student',$student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $studentid)
    {
        $student = Student::find($studentid);
        $student -> studentname = $request -> fullname;
        $student -> studentemail = $request -> email;
        $student -> studentnumber = $request -> phone;
        $student->save();
        return redirect('allstudent')->with('update_done','student is updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($studentid)
    {
        $student = Student::find($studentid);
        $student->delete();
        return redirect('allstudent')->with('delete_done','student is deleted');

        // Retrieving a single student and deleting it
// $student = Student::where('$student->studentid', true)->get();


    }
}
