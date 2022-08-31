<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyFinance</title>
</head>
<body id="main" >
    @include('layouts.partials.header')
    @include('layouts.partials.navbar')
    @yield('content')
    @include('layouts.partials.footer')

    <!-- Javascript files--> 
 <script src="js/jquery.min.js"></script> 
 <script src="js/popper.min.js"></script> 
 <script src="js/bootstrap.bundle.min.js"></script> 
 <script src="js/jquery-3.0.0.min.js"></script> 
 <script src="js/plugin.js"></script> 
 <!-- sidebar --> 
 <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
 <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 <script src="js/custom.js"></script>
 <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
    
    $(this).addClass('transition');
    }, function(){
    
    $(this).removeClass('transition');
    });
    });
    
 </script> 
</body>
</html>