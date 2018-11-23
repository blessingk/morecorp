<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function create_user(Request $request) {

        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->user_type_id = 2;
        $user->password = bcrypt($request->password);
        $user->save();
        return response()->json(['user' => $user], 200);
    }

    public function getUsers() {
        $users = User::where('user_type_id', 2)->get();
        return response()->json(['users' => $users], 200);
    }

    public function deleteUser($id) {
        $user = User::FindorFail($id);
        $user->delete();
        return response()->json(['message' => 'user deleted'], 200);
    }
}
