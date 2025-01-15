<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    /**
     * Muestra la lista de tareas.
     */
    public function index()
    {
        $tasks = Task::all(); // Obtener todas las tareas
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Muestra el formulario para crear una nueva tarea.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Almacena una nueva tarea en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'status' => 'required|boolean',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index')
            ->with('success', 'La tarea se creó exitosamente.');
    }

    /**
     * Muestra los detalles de una tarea específica.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    /**
     * Muestra el formulario para editar una tarea existente.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Actualiza una tarea existente en la base de datos.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'status' => 'required|boolean',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')
            ->with('success', 'La tarea se actualizó exitosamente.');
    }

    /**
     * Elimina una tarea de la base de datos.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')
            ->with('success', 'La tarea se eliminó exitosamente.');
    }
}
