<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacher(){
        return view('admin/teacher/index');
    }
    public function create(){
        return view('admin/teacher/create');
    }
    public function list(){
        return 'Teacher list';
    }
    public function detail(){
        return 'Teacher detail';
    }
    public function update(){
        return 'Teacher update';
    }
    public function delete(){
        return 'Teacher delete';
    }
}
