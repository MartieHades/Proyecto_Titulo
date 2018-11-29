<?php

include('funciones/menu.php');
include('funciones/consultas.php');

if($_SESSION['nivel']==1){

  $menu = getMenuMedico();
	$perfil = 'MEDICO';
	$usuarios = getUsuarios();
  $pacientes = getPacientes();
}

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Clinica Psiquiatrica | Servicio web</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>linica</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Clinica Psiquiatrica</b>Clinica</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <!--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Fernando Escobar</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <!--<li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>-->
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Cerrar Session</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--<li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Fernando Escobar</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->

      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="index.html"><i class="fa fa-link"></i> <span>Inicio</span></a></li>
        <li><a href="usuarios.php"><i class="fa fa-link"></i> <span>Usuarios</span></a></li>
        <li><a href="pacientes.php"><i class="fa fa-link"></i> <span>Pacientes</span></a></li>
        <li><a href="estadisticas.php"><i class="fa fa-link"></i> <span>Estadisticas</span></a></li>

        <!--<li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>-->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Bar Chart</h3>


            <!-- google chart-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                  google.charts.load("current", {packages:["corechart"]});
                  google.charts.setOnLoadCallback(drawChart);
                  function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                      ['Task', 'Hours per Day'],
                      ['Depresion',     11],
                      ['Ansiedad',      2],
                      ['Stress',  2],
                      ['Angustia', 4],
                      ['TOC',    7]
                    ]);

                    var options = {
                      title: 'Enfermedades',
                      pieHole: 0.2,
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                    chart.draw(data, options);
                  }
                </script>
            <!-- google chart end -->
            <div id="donutchart" style="width: 700px; height: 500px;"></div>

          </div>
          <div class="box-body">
            <div class="chart">
              <canvas id="barChart" style="height:230px"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>




    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      proyecto de titulo INACAP
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; Nosotros 2018 <a href="#">Nosotros</a>.</strong> Todos los derechos reservados
  </footer>


  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script src="/bower_components/chart.js/Chart.js"></script>

<script src="dist/js/demo.js"></script>



<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

     <script>
       $(function () {
         /* ChartJS
          * -------
          * Here we will create a few charts using ChartJS
          */

         //--------------
         //- AREA CHART -
         //--------------

         // Get context with jQuery - using jQuery's .get() method.
         var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
         // This will get the first returned node in the jQuery collection.
         var areaChart       = new Chart(areaChartCanvas)

         var areaChartData = {
           labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
           datasets: [
             {
               label               : 'Electronics',
               fillColor           : 'rgba(210, 214, 222, 1)',
               strokeColor         : 'rgba(210, 214, 222, 1)',
               pointColor          : 'rgba(210, 214, 222, 1)',
               pointStrokeColor    : '#c1c7d1',
               pointHighlightFill  : '#fff',
               pointHighlightStroke: 'rgba(220,220,220,1)',
               data                : [65, 59, 80, 81, 56, 55, 40]
             },
             {
               label               : 'Digital Goods',
               fillColor           : 'rgba(60,141,188,0.9)',
               strokeColor         : 'rgba(60,141,188,0.8)',
               pointColor          : '#3b8bba',
               pointStrokeColor    : 'rgba(60,141,188,1)',
               pointHighlightFill  : '#fff',
               pointHighlightStroke: 'rgba(60,141,188,1)',
               data                : [28, 48, 40, 19, 86, 27, 90]
             }
           ]
         }

         var areaChartOptions = {
           //Boolean - If we should show the scale at all
           showScale               : true,
           //Boolean - Whether grid lines are shown across the chart
           scaleShowGridLines      : false,
           //String - Colour of the grid lines
           scaleGridLineColor      : 'rgba(0,0,0,.05)',
           //Number - Width of the grid lines
           scaleGridLineWidth      : 1,
           //Boolean - Whether to show horizontal lines (except X axis)
           scaleShowHorizontalLines: true,
           //Boolean - Whether to show vertical lines (except Y axis)
           scaleShowVerticalLines  : true,
           //Boolean - Whether the line is curved between points
           bezierCurve             : true,
           //Number - Tension of the bezier curve between points
           bezierCurveTension      : 0.3,
           //Boolean - Whether to show a dot for each point
           pointDot                : false,
           //Number - Radius of each point dot in pixels
           pointDotRadius          : 4,
           //Number - Pixel width of point dot stroke
           pointDotStrokeWidth     : 1,
           //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
           pointHitDetectionRadius : 20,
           //Boolean - Whether to show a stroke for datasets
           datasetStroke           : true,
           //Number - Pixel width of dataset stroke
           datasetStrokeWidth      : 2,
           //Boolean - Whether to fill the dataset with a color
           datasetFill             : true,
           //String - A legend template
           legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
           //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
           maintainAspectRatio     : true,
           //Boolean - whether to make the chart responsive to window resizing
           responsive              : true
         }

         //Create the line chart
         areaChart.Line(areaChartData, areaChartOptions)

         //-------------
         //- LINE CHART -
         //--------------
         var lineChartCanvas          = $('#lineChart').get(0).getContext('2d')
         var lineChart                = new Chart(lineChartCanvas)
         var lineChartOptions         = areaChartOptions
         lineChartOptions.datasetFill = false
         lineChart.Line(areaChartData, lineChartOptions)

         //-------------
         //- PIE CHART -
         //-------------
         // Get context with jQuery - using jQuery's .get() method.
         var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
         var pieChart       = new Chart(pieChartCanvas)
         var PieData        = [
           {
             value    : 700,
             color    : '#f56954',
             highlight: '#f56954',
             label    : 'Chrome'
           },
           {
             value    : 500,
             color    : '#00a65a',
             highlight: '#00a65a',
             label    : 'IE'
           },
           {
             value    : 400,
             color    : '#f39c12',
             highlight: '#f39c12',
             label    : 'FireFox'
           },
           {
             value    : 600,
             color    : '#00c0ef',
             highlight: '#00c0ef',
             label    : 'Safari'
           },
           {
             value    : 300,
             color    : '#3c8dbc',
             highlight: '#3c8dbc',
             label    : 'Opera'
           },
           {
             value    : 100,
             color    : '#d2d6de',
             highlight: '#d2d6de',
             label    : 'Navigator'
           }
         ]
         var pieOptions     = {
           //Boolean - Whether we should show a stroke on each segment
           segmentShowStroke    : true,
           //String - The colour of each segment stroke
           segmentStrokeColor   : '#fff',
           //Number - The width of each segment stroke
           segmentStrokeWidth   : 2,
           //Number - The percentage of the chart that we cut out of the middle
           percentageInnerCutout: 50, // This is 0 for Pie charts
           //Number - Amount of animation steps
           animationSteps       : 100,
           //String - Animation easing effect
           animationEasing      : 'easeOutBounce',
           //Boolean - Whether we animate the rotation of the Doughnut
           animateRotate        : true,
           //Boolean - Whether we animate scaling the Doughnut from the centre
           animateScale         : false,
           //Boolean - whether to make the chart responsive to window resizing
           responsive           : true,
           // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
           maintainAspectRatio  : true,
           //String - A legend template
           legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
         }
         //Create pie or douhnut chart
         // You can switch between pie and douhnut using the method below.
         pieChart.Doughnut(PieData, pieOptions)

         //-------------
         //- BAR CHART -
         //-------------
         var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
         var barChart                         = new Chart(barChartCanvas)
         var barChartData                     = areaChartData
         barChartData.datasets[1].fillColor   = '#00a65a'
         barChartData.datasets[1].strokeColor = '#00a65a'
         barChartData.datasets[1].pointColor  = '#00a65a'
         var barChartOptions                  = {
           //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
           scaleBeginAtZero        : true,
           //Boolean - Whether grid lines are shown across the chart
           scaleShowGridLines      : true,
           //String - Colour of the grid lines
           scaleGridLineColor      : 'rgba(0,0,0,.05)',
           //Number - Width of the grid lines
           scaleGridLineWidth      : 1,
           //Boolean - Whether to show horizontal lines (except X axis)
           scaleShowHorizontalLines: true,
           //Boolean - Whether to show vertical lines (except Y axis)
           scaleShowVerticalLines  : true,
           //Boolean - If there is a stroke on each bar
           barShowStroke           : true,
           //Number - Pixel width of the bar stroke
           barStrokeWidth          : 2,
           //Number - Spacing between each of the X value sets
           barValueSpacing         : 5,
           //Number - Spacing between data sets within X values
           barDatasetSpacing       : 1,
           //String - A legend template
           legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
           //Boolean - whether to make the chart responsive
           responsive              : true,
           maintainAspectRatio     : true
         }

         barChartOptions.datasetFill = false
         barChart.Bar(barChartData, barChartOptions)
       })
     </script>

</body>
</html>