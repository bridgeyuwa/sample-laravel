@extends('layouts.tri-base')


@section('title','Nigerian Universities by Location')

@section('description')
{{ request()->getHttpHost() }} contains the most comprehensive list of Universities in Nigeria. 
Schools are grouped into Regions and States.
@endsection

@section('search')<!-- comment -->

@include('partials.search')

@endsection


@section('content')


<section>
    <div class="text-aqua text-center">
        <h1>Nigerian Universities by Location</h1>     
       Universities in Nigeria grouped by Regions and States in Nigeria.
       
       View schools by state in each region.
        <hr class="m-4">
        
    </div>
</section>




<div class="card">
    <div class="card-body">
        <div class="row g-6">

            @foreach($regions as $region)
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <div class="d-flex flex-row bd-highlight d-flex justify-content-between">
                            <div class="bd-highlight"><h3>{{$region->name}}</b> </h3></div>
                            <div class="bd-highlight"><span class="badge bg-primary rounded-pill">{{ count(App\Models\Region::find($region->id)->institutions) }}  schools </span></div>
                        </div>



                    </div>
                    <div class="card-body">

                        @foreach( App\Models\Region::find($region->id)->states; as $state )
                        <div class="d-flex flex-row bd-highlight d-flex justify-content-between m-1">
                            <div class=" bd-highlight"> {{$state->name}} </div>       <div class=" bd-highlight">    <a href="{{url("/search?location={$state->id}")}}" class="btn btn-outline-gradient gradient-7 btn-sm rounded-pill"><span>{{ count(App\Models\State::find($state->id)->institutions) }}  schools</span></a>
      </div>
                        </div>
                        
                        @endforeach

                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            @endforeach
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
</div>

 </br>
  </br>






@endsection