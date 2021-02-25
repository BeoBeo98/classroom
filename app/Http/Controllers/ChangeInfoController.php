<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\FormPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChangeInfoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('changeInfo');
    }

    public function update(FormPost $request)
    {
        $validated = $request->validated();
        DB::table('users')->where('username', Auth::user()->username)->update([ 'name' => $validated['name'], 'password' => Hash::make($validated['password']),
            'email' => $request['email'], 'phone' => $request['phone'] ]);
        return redirect('/home')->with('success', 'Update Success!');
    }
}
