<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ToDoListController extends Controller
{
    // function ToDoList () {
    //     return view ('page.ToDoList');
    // }

    function GetToDo(){
        // $obj1 = new \stdClass; (raw SQL query) 
        // //  \  berfungsi untuk akses secara lokal 
        // $obj1->todo = "To Do 1";
        // $obj1->deleted = false;
        
        // $obj2 = new \stdClass;
        // $obj2->todo = "To Do 2";
        // $obj2->deleted = false;

        // $obj3 = new \stdClass;
        // $obj3->todo = "To Do 3";
        // $obj3->deleted = true;

        // $todoList = array($obj1,$obj2,$obj3);

        $todoList = DB::select('select * from todo');
        
        return view ('page.ToDoList', ["data" => $todoList]);
    }
    // Request = case sensitive, merupakan type  
    function AddToDo(Request $request){
        $mytodo = $request->mytodo; 
        
        DB::insert('insert into todo (description) values (?)' , [$mytodo]);
        return redirect('/todo');
        // return view('page.ToDoList',["data" => $mytodo]);
        // kalau ada 2 form contohnya mytodo2, dengan 2 input, buat lagi variable baru 
    }
}
