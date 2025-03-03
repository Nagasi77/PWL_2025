<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\UserModel;
class UserController extends Controller
{
    public function index()
    {
    $data = [
        'level_id' => 2,
        'username' => 'manager_tiga',
        'nama'=> 'Manager 3',
        'password' => Hash::make('12345')];

    UserModel::create($data);

    $user = UserModel::all();
    return view('user', ['data' => $user]); 
}
}
