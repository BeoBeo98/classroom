<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilePost;
use App\Http\Requests\FormPost;
use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class HomeworkController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('homework');
    }

    public function create(Request $request)
    {
        $file = $request->file('fileName');

        if( is_null($file) ) {
            return redirect('/homework')->with('success', 'Fail!');
        }
        else {
            $contents = file_get_contents($file->getRealPath());
            $name = $file->getClientOriginalName();
            Storage::disk('local')->put($name, $contents);
            DB::table('jobs')->insert(
                ['id_user' => Auth::user()->id_user, 'type' => 0, 'fileLocation' => $name]
            );
            return redirect('/homework')->with('success', 'Add Success!');
        }
    }
}
