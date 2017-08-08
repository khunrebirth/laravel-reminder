<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileController extends Controller
{
    public function home() 
    {   
        $data['title']  = 'Files Page';
        $data['files']  = File::all();
        return view('files', $data);
    }
}
