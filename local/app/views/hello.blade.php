<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cakeology</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/login/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/login/css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/login/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
		a{
			color:#FF0066;
			display: inline-block;
  			padding: 6px 12px;
  			margin-bottom: 0;
  			text-align: center;
  			white-space: nowrap;
  			vertical-align: middle;
  			cursor: pointer;
  			-webkit-user-select: none;
     			-moz-user-select: none;
      			-ms-user-select: none;
          			user-select: none;
  			background-image: none;
  			border: 1px solid white;
  			border-radius: 4px;		
  			
		}
		a:hover{
			color:#FFB2D1;
		}
		
		</style>


<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand page-scroll">Sweets for Everyone</div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><img src="assets/bootstrap/images/logo1.png" /></div>
                <div class="intro-heading">Your Favorite Cakes in Perfect Individual</div>
                <div class="button"><h2>{{HTML::link('/login/fb','Login with Facebook')}}</h2></div>
            </div>
        </div>
    </header>
	</body>
</html>
