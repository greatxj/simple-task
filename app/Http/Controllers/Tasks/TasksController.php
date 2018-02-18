<?php

namespace App\Http\Controllers\Tasks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function index()
    {
        return view('task.index');
    }

    public function stone(Request $request)
    {
        
    }
}
