<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // GET /api/todos
    public function index()
    {
        $todos = Todo::all();
        return response()->json([
            'message' => 'Todos retrieved successfully',
            'data' => $todos
        ], 200);
    }

    // POST /api/todos
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'completed' => 'boolean',
            'priority' => 'in:low,medium,high'
        ]);
        $todo = Todo::create($validated);
        return response()->json([
            'message' => 'Todo created successfully',
            'data' => $todo
        ], 201);
    }

    // GET /api/todos/{id}
    public function show($id)
    {
        $todo = Todo::find($id);
        if (!$todo) {
            return response()->json([
                'message' => 'Todo not found',
                'data' => null
            ], 404);
        }
        return response()->json([
            'message' => 'Todo retrieved successfully',
            'data' => $todo
        ], 200);
    }

    // PUT /api/todos/{id}
    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        if (!$todo) {
            return response()->json([
                'message' => 'Todo not found',
                'data' => null
            ], 404);
        }
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'completed' => 'boolean',
            'priority' => 'in:low,medium,high'
        ]);
        $todo->update($validated);
        return response()->json([
            'message' => 'Todo updated successfully',
            'data' => $todo
        ], 200);
    }

    // PATCH /api/todos/{id}/complete
    public function complete($id)
    {
        $todo = Todo::find($id);
        if (!$todo) {
            return response()->json([
                'message' => 'Todo not found',
                'data' => null
            ], 404);
        }
        $todo->completed = true;
        $todo->save();
        return response()->json([
            'message' => 'Todo marked as completed',
            'data' => $todo
        ], 200);
    }

    // DELETE /api/todos/{id}
    public function destroy($id)
    {
        $todo = Todo::find($id);
        if (!$todo) {
            return response()->json([
                'message' => 'Todo not found',
                'data' => null
            ], 404);
        }
        $todo->delete();
        return response()->json([
            'message' => 'Todo deleted successfully',
            'data' => null
        ], 204);
    }
}
