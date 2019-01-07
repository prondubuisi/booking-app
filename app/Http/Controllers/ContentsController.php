<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    //
    public function home(Request $request)
    {
        $data = [];
        $data['version'] = '0.1.2';
        $last_updated = $request->session()->has('last_updated') ? 
        $request->session()->pull('last_updated') : 'none';
        $data['last_updated'] = $last_updated;
        return view('contents/home', $data);
    }
}
