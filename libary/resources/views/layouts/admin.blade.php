<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link rel="stylesheet" href="{{asset('Theme/AdminPanel/assets/css/style-starter.css')}}">
     <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>
<body class="noscroll">
    <div class="se-pre-con"></div>
    <div id="app">
            @yield('content')

    </div>
</body>
{{-- <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script> --}}

<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    //scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>

<script src="{{ asset('/Theme/AdminPanel/assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('/Theme/AdminPanel/assets/js/jquery-1.10.2.min.js') }}"></script>

<!-- chart js -->
{{-- <script src="{{ asset('/Theme/AdminPanel/assets/js/Chart.min.js') }}"></script> --}}
<script src="{{ asset('/Theme/AdminPanel/assets/js/utils.js') }}"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
{{-- <script src="{{ asset('/Theme/AdminPanel/assets/js/bar.js') }}"></script> --}}
{{-- <script src="{{ asset('/Theme/AdminPanel/assets/js/linechart.js') }}"></script> --}}
{{-- <script src="{{ asset('/Theme/AdminPanel/assets/js/jquery.nicescroll.js') }}"></script> --}}
<script src="{{ asset('/Theme/AdminPanel/assets/js/scripts.js') }}"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  //$(function () {
//     $('body').click(function () {
//         if($('body').is('.sidebar-menu-collapsed')){
//             $('body').removeClass('sidebar-menu-collapsed')
//             $('body').toggleClass('noscroll');
//         }else{
//             $('body').removeClass('noscroll')
//             $('.sidebar-menu-collapsed').fadeIn('slow');
//             $('body').toggleClass('sidebar-menu-collapsed');
//         }
//         console.log('tag', 'Hello')

//     })
//   });
</script>



<script src="{{ asset('/Theme/AdminPanel/assets/js/modernizr.js')}}"></script>





<script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>

<script src="{{ asset('/Theme/AdminPanel/assets/js/bootstrap.min.js')}}"></script>
</html>
