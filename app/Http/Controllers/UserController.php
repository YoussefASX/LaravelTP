<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Return a JSON response containing all users.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Fetch all users from the database
        $users = User::all();

        // Return as JSON (Laravel will automatically set the correct headers)
        return response()->json($users);
    }
}
