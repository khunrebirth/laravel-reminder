<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index() 
    {
        // return database_path();
    }

    public function profile() 
    {
        // Fake Data
        $user_1 = [
            'name'          => 'Adam Levine',
            'occupation'    => 'Singer - Maroon5',
            'website'       => 'https://maroon5.com',
            'tags'          => '#Maroon5 #Adam',
        ];
        $user_2 = [
            'name'          => 'Thanuki',
            'occupation'    => 'Singer eiei - Thanuki',
            'website'       => 'https://thanuki.com',
            'tags'          => '#eiei #Thanuki',
        ];

        // Set Data
        $data['title']      = 'Profile Page';
        $data['profiles']   = [
            $user_1, 
            $user_2,
        ];

        return view('profile', $data);
    }
    
}
