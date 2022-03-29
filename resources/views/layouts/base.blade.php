
<!DOCTYPE html>
<html lang="en">

    @include('partials.head')


    <body>

        @include('partials.header') 




       
        @yield('content', 'there is no body to yield') 
        


        @include('partials.footer')

        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        @include('partials.script')


    </body>





</html>