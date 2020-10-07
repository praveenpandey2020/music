<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Courses::all();
        return view('courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fname' => 'required|string',
            'lname' => 'required|string',
            'address' => 'required|string',
            'dob' => 'required',
            'phone' => 'required|string',
            'email' => 'required|string',
        ]);
        Courses::create($request-> all());
        Flash::Success("Course Created Sucessfully");
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Courses::find($id);
//        dd($course);
        return view('courses.edit', compact('course'));
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
        $this->validate($request,[
            'fname' => 'required|string',
            'lname' => 'required|string',
            'address' => 'required|string',
            'dob' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
        ]);
        $course = Courses::find($id);
        $course->update($request->all());
        Flash::success('Course updated successfully!!');
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Courses::find($id);
        $course->delete();
        Flash::success('Course Deleted successfully!!');
        return redirect()->route('courses.index');
    }
}
