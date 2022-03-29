<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\State;
use App\Models\Region;
use App\Models\Program;
use App\Models\College;
use \NumberFormatter;
class InstitutionController extends Controller {

    public function index() {



        $institutions = Institution::all();
        $programs = Program::all();
        $colleges = College::all();
        $states = State::all();

        return view('institution.index', compact('institutions','programs','colleges','states'));
    }

    public function programs($id) {

        $institution = Institution::find($id);

        $programs = Program::all();
        $colleges = College::all();
        $states = State::all();

        return view('institution.programs', compact('institution', 'programs', 'colleges', 'states'));
    }

    public function bylocation() {

        $states = State::all();
        $regions = Region::all();
        $programs = Program::all();

        return view('institution.bylocation', compact('states', 'regions', 'programs'));
    }

    public function byprogram() {

        $programs = Program::all();
        $colleges = College::all();
        $states = State::all();

        return view('institution.byprogram', compact('programs', 'colleges', 'states'));
    }
    
    
    
      public function ranking() {
          
          $programs = Program::all();
        $colleges = College::all();
        $states = State::all();

  $institutions = Institution::whereNotNull('rank')->orderBy('rank')->get(); //institutions
    

        return view('institution.ranking', compact('institutions','states','colleges','programs'));
    }
    

    public function show($id) {

        $institution = Institution::find($id);
        $programs = Program::all();
        $colleges = College::all();
        $states = State::all();
       
        $state = State::find($institution->state_id);
        
        $numberformatter = new Numberformatter('en_US',Numberformatter::ORDINAL);
        
        
        
        
        if($institution->rank) // if institution rank field is not Null
        
        {   
            
        {
            $inst = Institution::whereNotNull('rank')->orderBy('rank')->get(); //institutions
       
        
      $institutionRank = 0;
        foreach ($inst as $ins)
        {
            $institutionRank = $institutionRank + 1;
            
            if($ins->id == $institution->id)
            {
                break;
            }
        }
        }
     
    
        
        
       
        
     { $region_ins = Region::find($state->region->id)->institutions->whereNotNull('rank')->sortBy('rank'); //region institutions
      $regionRank = 0;
        foreach ($region_ins as $ins)
        {
            $regionRank = $regionRank + 1;
            
            if($ins->id == $institution->id)
            {
                break;
            }
        }
     }
     
     
     
     
     { $state_ins = State::find($state->id)->institutions->whereNotNull('rank')->sortBy('rank'); //region institutions
      $stateRank = 0;
        foreach ($state_ins as $ins)
        {
            $stateRank = $stateRank + 1;
            
            if($ins->id == $institution->id)
            {
                break;
            }
        }
     }
     
     } else { $institutionRank = false; $regionRank = false; $stateRank = false;}
     
     
        
        return view('institution.show', compact('institution', 'programs', 'colleges', 'states','state','numberformatter','regionRank','stateRank','institutionRank'));
    }
    
}
