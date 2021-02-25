<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ChallengeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('challenge');
    }

    public function create(Request $request)
    {
        $file = $request->file('fileName');

        if( is_null($file) ) {
            return redirect('/challenge')->with('success', 'Fail!');
        }
        else {
            $contents = file_get_contents($file->getRealPath());
            $name = $file->getClientOriginalName();
            Storage::disk('local')->put($name, $contents);
            DB::table('jobs')->insert(
                ['id_user' => Auth::user()->id_user, 'type' => 1, 'fileLocation' => $name]
            );
            return redirect('/challenge')->with('success', 'Add Success!');
        }
    }
}
