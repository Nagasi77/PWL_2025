<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\UserModel;
class UserController extends Controller
{
    public function index()
{
    $users = UserModel::where('level_id', 2)->get(); 
    return view('user', ['data' => $users]);
}

}
