@extends('layouts.base')


@section('title', 'FindUniversity Nigeria')

@section('description')
A platform with a complete online Brochure of all accredited Courses, Colleges, and Universities in Nigeria by Location, Degree Level, or Field of Specialization
@endsection


@section('content')
<section class="wrapper image-wrapper bg-image text-white" data-image-src=" {{ URL::to('/')}}/img/photos/bg5.jpg ">   
    <div class="container pt-17 pb-13 pt-md-19 pb-md-17 text-center">
        <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">

                    <h1 class="display-4 mb-3 text-center">FindUniversity Nigeria</h1>
                    <p class="lead fs-lg mb-10 text-center px-md-16 px-lg-21 px-xl-0">Welcome to a platform where you can browse the online Brochure of all accredited Courses, Colleges, and Universities in Nigeria by Location, Degree Level, or Field of Specialization, filter using the categories below.</p>

                </div> 
                <!-- /.post-header -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
   
</section>

<section  class="wrapper gradient-7 bg-soft-dark  angled upper-end">
    
  
    @include('partials.search')
   

    @include('partials.uni-counter')

</section>




<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 p-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Universities by Field of Study</h2>

                        <ul class="list-group card-text">

                            <!-- foreachstart -->

                            <li><a  href= " programs/medicine-and-surgery/institutions" class="hover" title="universities offering Medicine and Surgery courses">Medicine and Surgery schools<i class="fas fa-arrow-right"></i></a></li>
                            <li><a  href= " programs/law/institutions" class="hover" title="universities offering law courses">Law schools<i class="fas fa-arrow-right"></i></a></li>
                            <li><a  href= " programs/accounting/institutions" class="hover" title="universities offering accounting courses">Accounting schools<i class="fas fa-arrow-right"></i></a></li>
                            <li><a  href= " programs/civil-engineering/institutions" class="hover" title="universities offering civil Engineering courses">Civil Engineering schools<i class="fas fa-arrow-right"></i></a></li>
                            <li><a  href= " programs/architecture/institutions" class="hover" title="universities offering architecture courses">Architecture schools<i class="fas fa-arrow-right"></i></a></li>
                            <li><a  href= " programs/economics/institutions" class="hover" title="universities offering economics courses">Economics schools<i class="fas fa-arrow-right"></i></a></li>
                            <li><a  href= " programs/electrical-electronics-engineering/institutions" class="hover" title="universities offering electrical and electronics courses">Electrical and Electronics Engineering schools<i class="fas fa-arrow-right"></i></a></li>
                        </ul>
                        <div> <a href="institutions/by-program" class="btn btn-primary">View All Fields of Study</a> </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 p-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Universities by Location</h2>


                        <ul class="list-group card-text">

                            <!-- foreachstart -->

                            <li><a  href= " /search?location=25" class="hover" title="universities in Lagos">Lagos<i class="fas fa-arrow-right"></i></a></li>
                            <li><a  href= " /search?location=15" class="hover" title="universities in Abuja">Abuja<i class="fas fa-arrow-right"></i></a></li>
                            <li><a  href= " /search?location=19" class="hover" title="universities in Kaduna">Kaduna<i class="fas fa-arrow-right"></i></a></li>
                            <li><a  href= " /search?location=7" class="hover" title="universities in Benue">Benue<i class="fas fa-arrow-right"></i></a></li>
                            <li><a  href= " /search?location=28" class="hover" title="universities in Ogun">Ogun<i class="fas fa-arrow-right"></i></a></li>
                            <li><a  href= " /search?location=31" class="hover" title="universities in Oyo">Oyo<i class="fas fa-arrow-right"></i></a></li>
                            <li><a  href= " /search?location=27" class="hover" title="universities in Niger">Niger<i class="fas fa-arrow-right"></i></a></li>
                        </ul>


                        <a href="institutions/by-location" class="btn btn-primary">View All Locations</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 p-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">###############</h5>
                        <p class="card-text">Advertisement Space </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-6 p-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">University Ranking</h2>
                        
                        <ol class="list-group card-text">
                            
                            @foreach($insRank as $ins)
                            
                            <li><a  href= " {{ url("/institutions/{$ins->id}") }}" class="hover" title="{{$ins->name}}">{{$ins->name}}<i class="fas fa-arrow-right"></i></a> </li>
                            @endforeach
                            
                        </ol>
                        <a href="{{url('/institutions/ranking')}}" class="btn btn-primary">View Full Ranking</a>
                    </div>
                </div>
            </div>


        </div>




    </div>
</section>



<section>
    <div class="container">
        <div class=" container">
            <h2>Your Ultimate Guide to Universities and Courses in Nigeria</h2>
            <p> {{Illuminate\Support\Str::ucfirst(request()->getHttpHost())}} is a leading resource on higher education in Nigeria.</p>
            <p>Browse through our comprehensive lists of about {{count($programs)}} courses offered in {{count($institutions)}} universities. Discover <a href="institutions/ranking/">University Rankings</a> and get details on the most common <a href="/programs/">University Courses</a> in the Nigeria.</p>
            <p>Need to narrow down your search? You can filter the list of Universities using three categories. By <a href="/institutions/by-location/">Location</a>, by Degree Level (from Bachelor's to Doctorate), and by <a href="/institutions/by-program/">Field of Study</a>.</p>

            <hr>


        </div>
    </div>
</section>


@endsection