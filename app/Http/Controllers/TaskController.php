<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){

$tasks = DB::table('tasks')->where('name')->get();
return view('contact',compact('tasks'));




        // $tasks=[
        //     'task-1'=>'Maker your assignment',
        //     'task-2'=>'Check your phone',
        //     'task-3'=>'Watch a match'
        //     ];
            // return view('contact',compact('tasks'));
    }

public function show($id){

$task = DB::table('tasks')->find($id);
return view('task',compact('task'));

                          }




 //   public function about(){
 //       $name =request('name');
 //       $age =request('age');
//
 //        return view('about',['name'=>$name, 'age'=>$age]);
 //        return view('about')->with('name',$name)->with('age',$age);
 //       return view('about',compact('name','age'));             //the best and easy one of them.
//
 //   }

    // public function show(){

        // $name = request('name');
        // $age = request('age');
        // $name = $_REQUEST['name'];
        // $age = $_REQUEST['age'];
        // return view('about',compact('name','age'));              //the best and easy one of them.

    // }



}
