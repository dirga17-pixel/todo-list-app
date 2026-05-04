<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request) {
        $request->validate(['name' => 'required']);
        \App\Models\Task::create(['name' => $request->name]);
        return redirect()->back();
}
}
