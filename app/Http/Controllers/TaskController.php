<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
    {
        public function index()
        {
            $tasks = Task::getAll();
            return view('tasks.index', compact('tasks'));
        }

        public function show($id)
        {
            $tasks = Task::getAll();
            $task = collect($tasks)->firstWhere('id', $id);

            if (!$task) {
                abort(404);
            }

            return view('tasks.show', compact('task'));
        }
    }