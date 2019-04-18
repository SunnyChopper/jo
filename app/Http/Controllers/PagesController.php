<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
    	return view('index');
    }

    public function startup_application() {
    	return view('startup-application');
    }

    public function community() {
    	return view('community');
    }
}
