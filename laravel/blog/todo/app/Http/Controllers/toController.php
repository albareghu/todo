<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;

class toController extends Controller
{
    public function todo()
    {
        return view('new');
    }
    public function save(Request $request)
    {
        $todo = new todo;
        $todo->task=$request->title;
        $todo->description=$request->description;
        $todo->save();
        echo "saved";
       
    }
    public function view()
    {
        $newtodo = new Todo;
        $newtodos = $newtodo->all();
        return view('show',['todos'=>$newtodos]);
    }
    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return back();

    }
    public function edit($id)
    {
        $todo=Todo::find($id);
        return view('edit',['todo'=>$todo]);

    }
    public function update(Request $request)
    {
        $todo=Todo::find($request->id);
        $todo->task=$request->task;
        $todo->description=$request->description;
        $todo->save();
        return Redirect('/view');
    }
}
