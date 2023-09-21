<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUser()
    {
        $user = Auth::user(); // Get the authenticated user
        if ($user) {
            return response()->json(['user' => $user]);
        }
        

        return response()->json(['user' => null]);
    }
}
