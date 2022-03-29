@extends('layouts.bi-base')
@section('title','2022 Rankings of Universities in Nigeria')

@section('description')
2022 Rankings of Universities in Nigeria .  
(Federal, State, Private)
@endsection

@section('search')<!-- comment -->

@include('partials.search')

@endsection


@section('content')


<section>
    <div class="text-aqua">
        <h1>2022 Nigerian University Ranking</h1>  
        
        Ranking of Universities in Nigeria.

        <hr class="m-4">
    </div>
</section>




<div class="container">
<div class="card ">
<div class="card-header">
<h3>2022 Nigerian University Ranking</h3>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover">
<thead>
    <tr>
        <th class="h4">Rank</th>
        <th class="h4">University Name</th>
        <th class="h4">Location</th>
    </tr> 
</thead>
<tbody>
    @foreach( $institutions as $rank => $institution )
<tr>
<td><b>{{$rank + 1}}</b></td>
<td><a href="{{url("/institutions/{$institution->id}")}}">{{$institution->name}}</a></td>
<td>{{$institution->state->name}}</td>
</tr>
    @endforeach

</tbody>
</table>
</div>
</div>
</div>
</div>

</br>
</br>
@endsection