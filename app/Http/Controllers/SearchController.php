<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\State;
use App\Models\College;
use App\Models\Program;
use Illuminate\Database\Eloquent\Builder;

class SearchController extends Controller {

    public function index(Request $request) {

        $states = State::all(); 
        $programs = Program::all();


        $location = $request->input('location'); 
        $degree = $request->input('degree');
        $program_id = $request->input('program');
        $schooltype = $request->input('schooltype');

        if ($degree == null) {
            $programstable = 'programs';
        } elseif ($degree == "bachelors") {  //partially complete alpha testing
            $programstable = "programs";
        } elseif ($degree == "masters") {
            $programstable = "programmasters";
        }  else {
            Die('Error in degree table selection');
        }


        if (isset($location) && isset($program_id) && isset($schooltype)) {

            $institutions = Institution::whereHas($programstable, function (Builder $query) use ($program_id) {
                        $query->where('id', '=', $program_id);
                    })->where('state_id', $location)->where('schooltype_id', $schooltype)->paginate(30);

            $institutions->withPath('search?location=' . $location . '&degree=' . $degree . '&program=' . $program_id . '&schooltype=' . $schooltype);
          

        } elseif (!isset($location) && isset($program_id) && isset($schooltype)) {

            $institutions = Institution::whereHas($programstable, function (Builder $query) use ($program_id) {
                        $query->where('id', '=', $program_id);
                    })->where('schooltype_id', $schooltype)->paginate(30);

            $institutions->withPath('search?location=' . $location . '&degree=' . $degree . '&program=' . $program_id . '&schooltype=' . $schooltype);

        } elseif (isset($location) && !isset($program_id) && isset($schooltype)) {

            $institutions = Institution::where('state_id', $location)->where('schooltype_id', $schooltype)->paginate(30);
            $institutions->withPath('search?location=' . $location . '&degree=' . $degree . '&program=' . $program_id . '&schooltype=' . $schooltype);
           
            
        } elseif (isset($location) && isset($program_id) && !isset($schooltype)) {

            $institutions = Institution::whereHas($programstable, function (Builder $query) use ($program_id) {
                        $query->where('id', '=', $program_id);
                    })->where('state_id', $location)->paginate(30);
            $institutions->withPath('search?location=' . $location . '&degree=' . $degree . '&program=' . $program_id . '&schooltype=' . $schooltype);
         
            
        } elseif (isset($location) && !isset($program_id) && !isset($schooltype)) {


            $institutions = Institution::where('state_id', $location)->paginate(30);
            $institutions->withPath('search?location=' . $location . '&degree=' . $degree . '&program=' . $program_id . '&schooltype=' . $schooltype);
          
            
        } elseif (!isset($location) && isset($program_id) && !isset($schooltype)) {

            $institutions = Institution::whereHas($programstable, function (Builder $query) use ($program_id) {
                        $query->where('id', '=', $program_id);
                    })->paginate(30);
            $institutions->withPath('search?location=' . $location . '&degree=' . $degree . '&program=' . $program_id . '&schooltype=' . $schooltype);
       
            
        } elseif (!isset($location) && !isset($program_id) && isset($schooltype)) {

            $institutions = Institution::where('schooltype_id', $schooltype)->paginate(30);
          

            $institutions->withPath('search?location=' . $location . '&degree=' . $degree . '&program=' . $program_id . '&schooltype=' . $schooltype);
        } else {
            if (isset($degree)) {
                $institutions = Institution::has($programstable)->paginate(30);
            } else {
                $institutions = Institution::paginate(30);
                $institutions->withPath('search?location=' . $location . '&degree=' . $degree . '&program=' . $program_id . '&schooltype=' . $schooltype);
            }
        }


        $program = Program::find($program_id);
        $state = State::find($location);

        return view('search-result', compact('institutions', 'states', 'programs', 'program','state'));
    }

}
