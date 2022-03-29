<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\College;
use App\Models\Institution;
use App\Models\Program;

class HomeController extends Controller {

    public function index() {

        $states = State::all();
        $colleges = College::all();
        $institutions = Institution::all();
        $programs = Program::all();
        
        
        
        $insRank = Institution::whereNotNull('rank')->orderBy('rank')->limit(7)->get();
        
        return view('home', compact('states', 'colleges','institutions','programs','insRank'));
    }

}
