<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index() {
        return view('form');
    }

    public function  confirm(Request $request) {
        $request-> validate([
            'name' => 'required|max:30',
            'email' => 'required|max:50'
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        return view('confirm')->with([
            'name' => $name,
            'email' => $email
        ]);
    }

    public function send(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');

        return view('thanks')->with([
            'name' => $name,
            'email' => $email
        ]);
    }


}
