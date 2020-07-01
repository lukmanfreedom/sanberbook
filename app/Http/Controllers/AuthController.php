<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $req) {
        $data = $req->except('_token');

        if(!isset($data['firstname'])) {
            $data['firstname'] = "John";
        }

        if(!isset($data['lastname'])) {
            $data['lastname'] = "Doe";
        }

        return redirect()->route('welcome', ["data" => $data]);
    }
}
