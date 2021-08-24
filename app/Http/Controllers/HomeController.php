<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       
        return view('frontend.home');
    }
    public function news()
    {
       
        return view('frontend.news');
    }
    public function singleNews()
    {
       
        return view('frontend.single-news');
    }
    public function volunteer()
    {
       
        return view('frontend.volunteer');
    }
    public function volunteerMembers()
    {
       
        return view('frontend.volunteer-members');
    }
    public function volunteerProfile()
    {
       
        return view('frontend.volunteer-profile');
    }
    public function register()
    {
       
        return view('frontend.register');
    }
}
