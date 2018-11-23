<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function getUsers() {
        $users = User::where('user_type_id', 1)->get();
        return response()->json(['users' => $users], 200);
    }
}
