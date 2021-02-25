<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassInfoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = DB::table('users')->get();
        return view('classInfo', ['data' => $data ]);
    }

    public function show($id_user)
    {
        $id_user = User::find($id_user);
        return view('information', [ 'user' => $id_user ]);
    }
}
