<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    // show page list student
	public function index()
	{
		$students = Student::all();
		// return view('pages.list',compact('students'));
		return view('pages.list', compact('students'));
	}

    // show page add new student
	public function add()
	{
		return view('pages.add');
	}

    // store new student to db
	public function store(Request $request)
	{
		$student = new Student();
		$student->nim = $request->get('nim');
		$student->name = $request->get('name');
		$student->gender = $request->get('gender');
		$student->major = $request->get('major');
		$student->save();

		return redirect('/')->with('success', 'New Student has been successfully added');
    }

    // show page edit existing student
	public function edit($id)
	{
        $student = Student::find($id);
        return view('pages.edit', compact('student','id'));
    }

     // process update
	public function update(Request $request, $id)
	{
        $student= Student::find($id);
        $student->nim = $request->get('nim');
        $student->name = $request->get('name');
        $student->gender = $request->get('gender');
        $student->major = $request->get('major');
        $student->save();
		return redirect('/')->with('success', 'Student data updated');
    }

     // process delete
	public function delete($id)
	{
        $student = Student::find($id);
        $student->delete();
        return redirect('/')->with('success','Student data has been  deleted');
	}
}
