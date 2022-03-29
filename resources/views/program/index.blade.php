@extends('layouts.tri-base')

@section('title', 'list of academic courses offered in Nigerian Universities')

@section('description')
A list of all university courses offered in Nigeria with Information which includes: the program's curriculum, duration, admission requirements and so on
@endsection

@section('search')<!-- comment -->
@include('partials.search')
@endsection


@section('content')



<section>
    <div class="text-aqua">
        <h1 class="text-center">Academic programs(courses) offered in Nigeria</h1>
        
        {{ \Illuminate\Support\Str::title(request()->getHttpHost()) }} has prepared information on all academic programs (courses) offered in Nigerian Universities.
        The purpose of this library is to help prospective students choose the right University program (course). The information may include the program's curriculum, duration, admission requirements, difficulty level, On Job Training ( Students' Industrial Work Experience Scheme (SIWES) ) , professional exams and career opportunities for graduates.

        We currently have <strong>{{count($programcount)}}</strong> course information that carry Jamb/UTME subject combinations, 'O' Level/ SSC and 'A' Level direct entry requirements for admission.
        <hr class="m-4">
    </div>
</section>






{{ $programs->links() }}

</br>
<div class="row g-m-6">
    @foreach( $programs as $program )

    <div class="col-12 ">

        <div class="accordion accordion-wrapper" id="accordionExample">
            <div class="card accordion-item">
                <div class="card-header text-center" id="headingOne">

                    <a href="programs/{{$program->id}}" > {{$program->name}}</a> 

                </div>
            </div>
        </div>


    </div>

    @endforeach

</div>

</br>

{{ $programs->links() }}


@endsection