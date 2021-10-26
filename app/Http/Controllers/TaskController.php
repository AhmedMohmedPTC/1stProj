<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index(){

        $tasks = [
            'task_1' => 'Make your money',
            'task_2' => 'Make your love',
            'task_3' => 'Make your life'
        ];

return view('contact' , compact('tasks'));
    }
    //
}
