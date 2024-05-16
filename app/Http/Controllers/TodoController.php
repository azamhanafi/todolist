<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Todo;

class TodoController extends Controller
{
    //
    public function index()
    {
        $todos = Todo::orderBy('created_at', 'desc')->get();
        return view("welcome",["todos"=> $todos]);
    }
    public function store()
    {
        $attributes = request()->validate([ 
            "title"=> "required",
            "description" => "nullable",
        ]);
        $todo = Todo::create($attributes);

        return redirect("/");
    }
    public function update(TODO $todo)
    {
        $todo->update(["isDone"=>true]); 


        return redirect("/");
    }

    public function destroy(TODO $todo)
    {
        $todo->delete(); 
        return redirect("/");
    }

    public function clear()
{
    Todo::whereNotNull('id')->delete();
    return response()->json(['message' => 'To-Do list cleared successfully.']);
}



}
