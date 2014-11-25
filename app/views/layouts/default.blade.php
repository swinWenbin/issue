<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="issue tracker project for Stan's class">
    <meta name="wenbin ren" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Issue Tracker Project</title>

    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="container">
      @include('layouts.nav')

      <div class="main-content">
        @yield('content')
      </div>

    </div><!-- /.container -->








    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <!-- more JS -->
    <script src="/script/default.js"></script>
    <script src="/script/docs.min.js"></script>
    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="/js/tablesorter/tables.js"></script>
  </body>
</html>
