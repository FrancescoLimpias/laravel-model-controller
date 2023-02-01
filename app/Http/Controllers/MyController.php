<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;

class MyController extends Controller
{
    public function index()
    {
        $data = [
            "movies" => Movies::all(),
        ];

        return view('welcome', $data);
    }
}
