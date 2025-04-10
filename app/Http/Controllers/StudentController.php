<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class StudentController extends Controller
{
    public function index()
    {

        $students = Student::all();

        return view('student.index')->with([
            'students' => $students
        ]);
    }

    public function create()
    {
        $guardians = Guardian::all();

        return view('student.create',  [
            'guardians' => $guardians,
        ]);
    }


    public function edit($id) {
          $student  = Student::find($id);
          $guardians_data = Guardian::all();

          $guardians = [];

          foreach ($guardians_data as $guardian) {
                $guardians[$guardian->id] = $guardian->name;
          }

          return view('student.edit')->with([
            'student' => $student,
            'guardians' => $guardians
          ]);
    }


    public function update(Request $request, $id) {


        $students = Student::find($id);
        $students->name = $request->input('name'),
        $students->email = $request->input('email'),
        $students->email = $request->input('email'),

        $students->save();


        Student::where(['id' => $id])->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
           'guardian_id' => $request->input('guardian_id'),

        ]);

        return redirect()->to('/student');


    }



}
