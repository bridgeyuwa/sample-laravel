







    <form method="get" action="search">
        <div class="form-group">
            <label for="formGroupExampleInput">Location</label>
            <select class= "form-control" name="location" id="location" >
                <option value="">Any Location </option> 
                @foreach($states as $state)


                <option value="{{$state->id}}" @if( $state->id == request()->get('location') )  {{'selected = "true"'}} @endif >{{$state->name}} </option>
                

                @endforeach



            </select>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Degree</label>
            <select  class = "form-control" name="degree" id="degree" >
                <option value="" disabled="disabled"> Any Degree </option> 
                <option value="bachelors" selected="true">Bachelor's Degree</option> 
                <option value="masters" disabled="disabled">National Diploma</option> 
                <option value="phd" disabled="disabled">College of Education</option>
            </select>
        </div>
        
        
        <div class="form-group">
            <label for="formGroupExampleInput2">Field of Study</label>
            <select class = "form-control" name="program" id="program" >
                <option value=""> Any Field </option> 
               
                @foreach($programs as $program)
                 <option value="{{$program->id}}" @if( $program->id == request()->get('program') )  {{'selected = "true"'}} @endif >{{\Illuminate\Support\Str::title($program->name)}} </option>
                
                @endforeach
                
              

            </select>
        </div>


        School Type   

        <div class="form-check">
            <input class="form-check-input" type="radio" name="schooltype" id="schooltype" value="" @if( "" == request()->get('schooltype') )  {{'checked = "checked"'}} @endif>
            <label class="form-check-label" for="exampleRadios1">
                Any
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="schooltype" id="schooltype" value="1" @if( 1 == request()->get('schooltype') )  {{'checked = "checked"'}} @endif>
            <label class="form-check-label" for="exampleRadios2">
                Federal
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="schooltype" id="schooltype" value="2" @if( 2 == request()->get('schooltype') )  {{'checked = "checked"'}} @endif>
            <label class="form-check-label" for="exampleRadios2">
                State
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="schooltype" id="schooltype" value="3" @if( 3 == request()->get('schooltype') )  {{'checked = "checked"'}} @endif>
            <label class="form-check-label" for="exampleRadios3">
                Private
            </label>
        </div> 
        
        
        <div class="col-lg p-1">
            <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Find University">
        </div>
        
       

    </form>

