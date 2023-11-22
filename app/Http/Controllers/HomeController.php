<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Student;

class HomeController extends Controller
{
    public function index(): View
    {
        $students = Student::all();
        return view('home')->with('students', $students);
        // return 'home controller';
    }
}
