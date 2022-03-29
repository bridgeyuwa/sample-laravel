@extends('layouts.tri-base')


@section('title')
{{\Illuminate\Support\Str::title($program->name)}}| Details
@endsection

@section('description')
Course description of {{$program->name}}: Jamb/UTME subject combination, SSC/'O' Level, direct entry 'A' Level requirements
@endsection






@section('search')<!-- comment -->

@include('partials.search')

@endsection


@section('content')


<div class="text-aqua text-center">

    <h1>{{$program->name}}</h1>
    <h2>Course description and admission requirements</h2>

    Detailed course description of {{$program->name}}: includes admission requirements ( Jamb/UTME subject combination, SSC/'O' Level and direct entry 'A' Level requirements.)

    <hr class="m-4">
</div>






<div class="card bg-body">

    <div class="card-body">


        <h2 class="display-3">Program Overview</h2>


        
        
        


        <div> <p class="h2">Admission Requirements</p>
            <hr class="m-2">
            <div class="container"><p class="h4">JAMB / UTME Subject Combination.</p>

                <ul style="margin-top:0;margin-bottom:0;">

                    <li> {{$program->utme_subjects}}</li>

                </ul>

                <hr class="m-2">

                <p class="h4">'O' Level / SSC Requirement.</p>

                <ul style="margin-top:0;margin-bottom:0;">

                    <li> {{$program->utme_req}}</li>

                </ul>


                <hr class="m-2">

                <p class="h4">Direct Entry Requirement</p>

                <ul style="margin-top:0;margin-bottom:0;">

                    <li> {{$program->direct_entry_req}}</li>

                </ul>
            </div>
        </div>


        <hr class="m-4">

        <div class="accordion accordion-wrapper" id="accordionExample">
            <div class="card accordion-item">
                <div class="card-header text-center" id="headingOne">

                    <h2> <a href="{{url("/programs/{$program->id}/institutions")}}">Institutions Offering {{$program->name}} ({{count($program->institutions)}}) </a> </h2>


                </div>
            </div>
        </div>



    </div>
</div>
</br>
</br>

@endsection

