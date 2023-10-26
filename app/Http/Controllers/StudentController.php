<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{

    public function show($id)
    {
        $address = Student::find($id)->contact->address;
        $name = Student::find($id)->name;
        $phone = Student::find($id)->contact->phone;
        return view("example", ['name'=> $name,'address' => $address,'phone' => $phone] );
    }

    public function create(){
        $students = Student::all();
        return view('create', ['students' => $students]);
    }
    public function store(Request $request){

        $request ->validate([
            'name' => 'required',
            'score' => 'required'
        ]);

        Student::create([
            'name'=>$request->name,
            'score'=>$request->score
        ]);
        return Redirect::route('create');
    }
}
