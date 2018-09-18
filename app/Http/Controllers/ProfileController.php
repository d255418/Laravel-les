<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function show()
    {
        // data we need: name, description, email
        $data = [
            "name" => "Laura Kruidhof",
            "description" => "omschrijving",
            "interests" => [ "drawing", "music", "memes" ],
            "age" => 17,
            "email" => "laurakruidhof@gmail.com",
        ];

        return view('me', $data);
    }
}
