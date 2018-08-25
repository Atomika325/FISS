<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title ='Welcome to PUP-FISS!';
        return view('pages.Home')->with('title', $title);
    }

    public function adminhome(){
        $title ='Home | Adminstrator';
        return view('pages.AdminHome')->with('title', $title);
    }

    public function aabout(){
        $title ='About Developers';
        return view('pages.About')->with('title', $title);
    }

    public function facultylist(){
        $title ='Faculty List';
        return view('pages.FacultyList')->with('title', $title);
    }
    public function crud(){
        $title ='Add';
        return view('pages.newpractice')->with('title', $title);
    }
    public function pschedule(){
        $title ='Professor Schedule';
        return view('pages.ProfSched')->with('title', $title);
    }
    public function sschedule(){
        $title ='Student Schedule';
        return view('pages.StudentSched')->with('title', $title);
    }
    public function profhome(){
        $title = 'Home | Professor';
        return view('pages.ProfHome')->with('title', $title);
    }

    public function profprofile(){
        $title = 'Your Profile';
        return view('pages.CreateorEditProfile')->with('title', $title);
    }

    public function yoursched(){
        $title = 'Your Schedule';
        return view('pages.YourSched')->with('title', $title);
    }
    public function pabout(){
        $title ='About Developers';
        return view('pages.AboutP')->with('title', $title);
    }

}
?>
