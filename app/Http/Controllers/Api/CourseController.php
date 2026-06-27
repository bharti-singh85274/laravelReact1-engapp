<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    

    public function index()
    {
        return Course::all();
    }

    public function show($id)
    {
        return Course::findOrFail($id);
    }



}
