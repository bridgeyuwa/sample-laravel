<?php

namespace App\Http\Controllers;
use App\Models\Program;
use App\Models\Institution;
use App\Models\State;
use App\Models\College;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    public function index() {

      
        //$programs = Program::all()->paginate(100);
        $programs = DB::table('programs')->where('college_id','<' ,200 )->paginate(85);  //workaround to be able to paginate 
      $programcount = Program::all(); // passed just to be able to count total programs
        $states = State::all();
        $colleges = College::all();
        
        return view('program.index', compact('programs','states','colleges','programcount'));
    }
    
    public function show($id) {
        
        $program = Program::find($id);
        
         $programs = Program::all();
       $states = State::all();
        $colleges = College::all();
        
        
        

        return view('program.show', compact('program','programs','colleges','states'));
    }
    
    
     public function institutions($id) {
        
        $program = Program::find($id);
         $programs = Program::all();
       $states = State::all();
        $colleges = College::all();
       

       
        return view('program.institutions', compact('program','programs','colleges','states'));
    }
    
}
