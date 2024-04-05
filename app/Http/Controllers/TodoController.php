<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();

        return view('todos.index', compact('todos'));
    }
    public function new() {
        return view('todos.new');
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ]);

        Todo::create($validatedData);

        return redirect()->route('todos.index')->with('success', 'タスクが追加されました。');
    }
}
