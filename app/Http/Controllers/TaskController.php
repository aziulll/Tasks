<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        // Obtém todas as tasks associadas ao usuário autenticado
        $tasks = $user->tasks;

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        Task::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(),
            'is_finished' => false,
            'category' => $request->category,
        ]);

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }

    public function show()
    {
        return view('tasks.task');
    }

    public function finishTask(Request $request, $taskId)
    {
        $task = Task::find($taskId);

        if ($task) {

            $task->update([
                'is_finished' => !$task->is_finished,
            ]);
            return redirect()->route('tasks.index');
        }
    }
}
