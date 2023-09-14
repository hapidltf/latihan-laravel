<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    public function index()
    {
        $query = Student::all();

        return view('students.index', compact('query'));
    }

     public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        dd(request->all());
        $createStudent = Student::create([
            'nis'    => $request->nis,
            'name'    => $request->name,
            'gender'    => $request->gender,
            'religion'    => $request->relogion,
            'birth_day'    => $request->birth_day,
            'class'    => $request->class,
            'address'    => $request->address,
        ]);
    }

    public function delete(Request $request)
    {
        $deletedata = Student::find($request->id);
        $deletedata-> delete();

        return redirect('students');
    }
}



