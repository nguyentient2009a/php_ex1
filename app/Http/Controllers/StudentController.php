<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function student(){
        return view('admin/teacher/index');
    }
    public function create(){
        return view('admin/student/create');
    }
    public function list(){
        return 'student list';
    }
    public function detail(){
        return 'student detail';
    }
    public function update(){
        return 'student update';
    }
    public function delete(){
        return 'student delete';
    }
}
