<section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center bg-map mb-8" data-image-src="">

        <div class="row">
          <div class="col-md-10 col-lg-9 col-xl-7 mx-auto">
            <div class="row align-items-center counter-wrapper gy-4 gy-md-0">
              <div class="col-md-4 text-center">
                  <div class="icon btn btn-circle btn-lg btn-soft-primary disabled mx-auto mb-4"> <i class="uil uil-presentation-check"></i> </div>
                <h3 class="counter counter-lg text-primary"> {{count($institutions)}} </h3>
                <p>Institutions</p>
              </div>
              <!--/column -->
              <div class="col-md-4 text-center">
                  <div class="icon btn btn-circle btn-lg btn-soft-primary disabled mx-auto mb-4"> <i class="uil uil-presentation-check"></i> </div>
                <h3 class="counter counter-lg text-primary">{{count($colleges)}}</h3>
                <p>Faculty Divisions</p>
              </div>
              <!--/column -->
              <div class="col-md-4 text-center">
                  <div class="icon btn btn-circle btn-lg btn-soft-primary disabled mx-auto mb-4"> <i class="uil uil-presentation-check"></i> </div>
                <h3 class="counter counter-lg text-primary">{{count($programs)}}</h3>
                <p>Courses</p>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
     
      <!-- /.container -->
    </section>