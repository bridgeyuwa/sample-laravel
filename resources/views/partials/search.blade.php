<section >
    <form method="get" action="   {{url("/search")}}">
        <div class="container py-3 ">

            <div class="row py-3 px-lg-5 border rounded bg-gradient-blue ">

                <div class="col-lg p-1">
                    <select class= "form-select" name="location" id="location" >
                        <option value="">Any Location</option> 
                        @foreach($states as $state)

                        <option value="{{$state->id}}" @if( $state->id == request()->get('location') )  {{'selected = "true"'}} @endif >{{$state->name}} </option>


                        @endforeach



                    </select>
                </div>

                <div class="col-lg p-1"  >
                    <select  class = "form-select" name="degree" id="degree" >
                        <option value="" disabled="disabled"> Any Degree </option> 
                        <option value="bachelors" selected="true">Bachelor's Degree</option> 
                        <option value="Masters" disabled="disabled">Master's Degree</option> 
                        <option value="phd" disabled="disabled">Doctor of Philosophy</option>
                    </select>
                </div>

                <div class="col-lg p-1">
                    <select class = "form-select" name="program" id="program" >
                       
                        <option value="">Any Field</option>
                        
                       
                        
                        

                            @foreach( $programs; as $program)
                            <option value="{{$program->id}}">  {{\Illuminate\Support\Str::title($program->name)}}  </option>
                            @endforeach
                        

                    </select>
                </div>

                <input type="hidden" id="schooltype" name="schooltype" value="">

                <div class="col-lg p-1">
                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Find University">
                </div>


            </div>
        </div>
    </form>

</section>