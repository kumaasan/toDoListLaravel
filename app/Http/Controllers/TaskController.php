<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('add');
    }
    public function getTask()
    {
        return view('display');
    }
    public function updateTask()
    {
        return view('update');
    }
}
