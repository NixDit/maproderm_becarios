<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('pages.events.index');
    }

    public function create(){
        // return view('pages.events.create')->with( 'job', new Job );
        return view('pages.events.create');
    }
}
