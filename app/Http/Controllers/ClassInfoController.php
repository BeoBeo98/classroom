<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ClassInfoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('classInfo');
    }

    public function show($user)
    {
        $user = User::find($user);
        return view('information', [ 'user' => $user ]);
    }
}
