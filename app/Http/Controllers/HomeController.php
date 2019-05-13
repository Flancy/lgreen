<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
    	return view('welcome');
    }
    public function portfolio() {
    	return view('portfolio');
    }
    public function about() {
    	return view('about');
    }
    public function contact() {
    	return view('contact');
    }
    public function partner() {
    	return view('partner');
    	}
}
