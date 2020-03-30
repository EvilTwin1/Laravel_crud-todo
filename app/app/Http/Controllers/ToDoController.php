<?php

namespace App\Http\Controllers;

use App\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{

    public function index()
    {
        $todos = ToDo::orderBy('created_at','desc')->where('complete', 0)->get();
        $todosDone = ToDo::orderBy('updated_at','desc')->where('complete', 1)->get();
        return view('partial.list', ['todos' =>$todos,'todosDone' => $todosDone ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:255'
        ]);

        ToDo::create($request->all());

        return redirect('/')->with('message', 'ToDo was created successfully');
    }


    public function update(Request $request, $id)
    {
        $todo = ToDo::findOrFail($id);

        if ($todo->complete){
            $todo->complete = false;
        }else{
            $todo->complete = true;
        }

        $todo->save();

        return redirect('/');
    }


    public function destroy($id)
    {
        ToDo::find($id)->delete();
        return redirect('/')->with('message', 'ToDo was deleted successfully');
    }

}
