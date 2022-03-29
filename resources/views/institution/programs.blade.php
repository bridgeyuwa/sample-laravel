@extends('layouts.tri-base')


@section('title')
All courses offered by {{$institution->name}}
@endsection

@section('description')A list of all courses /programs offered by {{$institution->name}}
@endsection



@section('search')

@include('partials.search')

@endsection



@section('content')




<section>
    <div class="text-aqua text-center">
        <h1>Courses offered by {{ $institution->name }} </h1>            
        A list of all courses/programs offered by {{$institution->name}} .&nbsp;
       
        <hr class="m-4">
        
    </div>
</section>


<div class="card g-0">
    <div class="card-body">
        <div class="row g-6">

            
            <div class="col-12">
                <div class="card">
                    
                    <div class="card-body">
                        <ul>
                        @foreach( App\Models\Institution::find($institution->id)->programs; as $program )
                        <li>{{\Illuminate\Support\Str::title($program->name)}}</li>

                        @endforeach
                        </ul>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
</div>

<br><!-- comment -->
<br>



@endsection