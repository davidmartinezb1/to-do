<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller {
    public function index() {
        return Todo::where('archive', 0)->orderBy('id', 'desc')->get();
    }
    
    public function archived() {
        return Todo::where('archive', 1)->orderBy('id', 'desc')->get();
    }
    
    public function store(Request $request) {
        $this->validate($request, [
            'body' => 'required|max:300'
        ]);
        return Todo::create(['body' => request('body')]);
    }
    
    public function edit(Request $request) {
        $this->validate($request, 
            [
                'body' => 'required|max:300'
            ]
        );
        $todo = Todo::findOrFail($request->id);
        $todo->body = $request->body;
        $todo->save();
    }
    
    public function archive($id) {
        $todo = Todo::findOrFail($id);
        $todo->archive = ! $todo->archive;
        $todo->save();
    }
    public function destroy($id){
        $todo = Todo::findOrFail($id);
        $todo->delete();
    }
}
