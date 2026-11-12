<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

use function Laravel\Prompts\task;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view("todos.index", compact("todos"));
    }

    public function create()
    {
        return view("todos.create");
    }

    public function store(Request $request)
    {

        $request->validate([
            'task' => 'required|string'
        ]);

        Todo::create([
            'task'=> $request->task,
        ]);

        return redirect()->route('todos.index')->with('success','Task added successfully');
    }

    public function show(Todo $todo){
        return view('todos.show', compact('todo'));
    }

    public function edit(Todo $todo){
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo){
        $request->validate(['task'=>'required | string']);
        $todo->update(['task'=> $request->task]);
        return redirect()->route('todos.index')->with('success','successfuly');
    }
    public function destroy(Todo $todo){
        $todo->delete();
        return redirect()->route('todos.index')->with('success','Task deleted successfully');
    }
}
