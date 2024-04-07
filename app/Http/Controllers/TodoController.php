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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ], [
            'title.required' => 'タスクのタイトルを入力してください。',
        ]);

        Todo::create($validatedData);

        return redirect()->route('todos.index')->with('success', 'タスクが追加されました。');
    }
    public function edit($id) {
        $todo = Todo::findOrFail($id);
        return view('todos.edit', compact('todo'));
    }
    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ]);
        $todo = Todo::findOrFail($id);
        $todo->update($validatedData);

        return redirect()->route('todos.index')->with('success', 'タスクが更新されました。');
    }
    public function destroy($id) {
        $todo = Todo::findOrFail($id);
        // dd($todo);
        $todo->delete();
        return redirect()->route('todos.index')->with('success', 'タスクが削除されました。');
    }
}
