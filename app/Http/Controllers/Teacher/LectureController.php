<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class LectureController extends Controller
{
    public function index()
    {
        return view('teacher.lecture');
    }
}
