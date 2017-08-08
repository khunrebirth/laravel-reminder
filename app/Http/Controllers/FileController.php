<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

use File;

use App\Files;

class FileController extends Controller
{
    public function home() 
    {   
        $data['title']  = 'Files Page';
        $data['files']  = Files::all();

        return view('files', $data);
    }

    public function upload(Request $request)
    {
        $fileName       = $request->name;
        $extension      = Input::file('upload_file')->getClientOriginalExtension();
        
        Storage::disk('profiles')->put($fileName . '.' . $extension, File::get(Input::file('upload_file')));
        
        // Insert Data to Databse
        $newFile                    = new Files();
        $newFile->FileName          = $fileName;
        $newFile->FileExtension     = $extension;

        $newFile->save();

        return back()->with(['UploadFileStatus' =>  'Success']);
    }

    public function download($filName)
    {
        // return response()->download('../storage/app/profiles', $filName);
        return response()->download(storage_path("app/profiles/{$filName}"));
    }
}
