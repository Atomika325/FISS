<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title ='Welcome to PUP-FISS!';
        return view('pages.Home')->with('title', $title);
    }
}
