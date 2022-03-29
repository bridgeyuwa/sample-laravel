<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">


    <!-- Primary Meta Tags -->
    <title> @yield('title','nothing to yield as title')</title>
    <meta name="title" content="@yield('title')">
    <meta name="description" content="@yield('description')">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="{{url('/logo.png')}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{url()->current()}}">
    <meta property="twitter:title" content="@yield('title')">
    <meta property="twitter:description" content="@yield('description')">
    <meta property="twitter:image" content="{{url('/logo.png')}}">




    <!<!-- css styles -->
    <link rel="stylesheet" href=" {{url('/css/plugins.css')}} ">
    <link rel="stylesheet" href=" {{url('/css/style.css')}} ">
    <link rel="stylesheet" href=" {{url('/css/colors/blue.css')}} ">



    <!<!-- fonts -->
    <link rel="preload" href=" {{url('css/fonts/thicccboi.css')}} " as="style" onload="this.rel = 'stylesheet'">


    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-N7Z9RPYSNT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-N7Z9RPYSNT');
</script>
    
    

</head>