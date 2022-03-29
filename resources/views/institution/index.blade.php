@extends('layouts.bi-base')
@section('title','List of All Universities in Nigeria')

@section('description')
A list of all Universities in Nigeria accredited by The National Universities Commission (NUC) with their location (states).  
(Federal, State, Private)
@endsection

@section('search')<!-- comment -->

@include('partials.search')

@endsection


@section('content')


<section>
    <div class="text-aqua">
        <h1>Universities in Nigeria</h1>  
        
        A list of all Universities in Nigeria accredited by the Nigerian Universities Commission (N.U.C).

        <hr class="m-4">
    </div>
</section>





<div class="row g-m-6">
    @foreach( $institutions as $institution )

    <div class="col-12 ">

        <div class="accordion accordion-wrapper" id="accordionExample">
            <div class="card accordion-item">
                <div class="card-header text-center" id="headingOne">

                    <div class="d-flex flex-row bd-highlight mb-3 justify-content-between">
                        <div class="bd-highlight"><a href="{{url("/institutions/{$institution->id}")}}">{{$institution->name}}</a></div>
                        <div class="bd-highlight">{{$institution->schooltype->name}} {{$institution->category->name}}</div>
                    </div>

                </div>
            </div>
        </div>
 </div>

    @endforeach

</div>

@endsection