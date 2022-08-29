<!DOCTYPE html>
<html lang="en">

<head>
   <title>soengsouy.com</title>


   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->
   <link rel="shortcut icon" href="backend/assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="backend/assets/images/favicon.ico" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="backend/assets/icon/themify-icons/themify-icons.css">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="backend/assets/icon/icofont/css/icofont.css">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="backend/assets/icon/simple-line-icons/css/simple-line-icons.css">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="backend/assets/plugins/bootstrap/css/bootstrap.min.css">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="backend/assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

   <!-- Weather css -->
   <link href="backend/assets/css/svg-weather.css" rel="stylesheet">


   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="backend/assets/css/main.css">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="backend/assets/css/responsive.css">

</head>

<body class="sidebar-mini fixed">
   <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div>
   <div class="wrapper">
      <!-- Navbar-->
      @include('backend.fixed.header')
      <!-- Side-Nav-->
      @include('backend.fixed.sidebar')
      @yield('backend_content')
      <!-- Sidebar chat start -->
      
   </div>
   <!-- Warning Section Starts -->

   <!-- Required Jqurey -->
   <script src="backend/assets/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="backend/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="backend/assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="backend/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="backend/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="backend/assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="backend/assets/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="backend/assets/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Sparkline charts -->
   <script src="backend/assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

   <!-- Counter js  -->
   <script src="backend/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
   <script src="backend/assets/plugins/countdown/js/jquery.counterup.js"></script>

   <!-- Echart js -->
   <script src="backend/assets/plugins/charts/echarts/js/echarts-all.js"></script>

   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="backend/assets/js/main.min.js"></script>
   <script type="text/javascript" src="backend/assets/pages/dashboard.js"></script>
   <script type="text/javascript" src="backend/assets/pages/elements.js"></script>
   <script src="backend/assets/js/menu.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
$window.scroll(function(){
    if ($window.scrollTop() >= 200) {
       nav.addClass('active');
    }
    else {
       nav.removeClass('active');
    }
});
</script>

</body>

</html>
