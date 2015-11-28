<!DOCTYPE HTML>
<html>
    <head>
        <title>CAKEOLOGY</title>
        <link href="bootstrap/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="bootstrap/js/jquery.min.js"></script>
         <!-- Custom Theme files -->
        <link href="bootstrap/css/style.css" rel='stylesheet' type='text/css' />
         <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        </script>
        
    </head>
    <style>
     a{
        color:white;
     }
     a.hover{
        color:pink;
     }
     div.form-group-text{
        width: 700px;
        padding-left: 40px;
     }
     div.form{
        margin-top:50px;
        margin-left:230px;
        padding-left: 10px;
        width: 800px;
        height: 400px;
        border:1px solid white;
        border-radius:20px;
     }
     .btn-primary1 {
        color: #fff;
        background-color: #1B242F;
        border-color: #357ebd;
        }
     
    </style>
    <body>
        {{ HTML::script('bootstrap/js/jquery.min.js') }}
    {{ HTML::style('bootstrap/css/style.css') }}
    {{ HTML::script('bootstrap/css/bootstrap.css') }}
    <!-- container -->
        <!-- top-header -->
        <div class="top-header">
            <div class="container">
                <div class="top-header-left">
                    <ul>
                        <li>{{HTML::link('/myaccount','My Account', array('style' => 'color:white, hover: pink'))}}</li>
                        <li>{{HTML::link('/logout','Logout', array('style' => 'color:white, hover: pink'))}}</li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="top-header-center">
                    <p><span class="cart"> </span class="active">{{HTML::link('/home','Home Page', array('style' => 'color:white, hover: pink'))}}</p>
                </div>
                <div class="top-header-right">
                    <ul>                        
                        <li style="margin-top:1px; margin-left:135px; color:white"><h4>&nbsp;&nbsp;Hi, &nbsp;</h4></li>
                        <li style="margin-top:1px; color:white">
                            <h4>
                                <img style ="width:35px; height:35px;" src="@foreach($user as $users)
                            {{$users['image'];}}@endforeach" />
                                @foreach($user as $users)
                                     {{$name=$users['name'];}}
                                @endforeach
                            </h4></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- /top-header -->
        <!-- main-menu -->
                      <div class='form'>
                        <h1 class="style">Please Specify Your Address</h1>
                                            <br><br>
                                   
                                                {{ Form::open(array('url' => 'location')) }}
                                                <br>
                                                <br>
                                                
                                                <div class="form-group-text">
                                                    <center>
                                                    {{ Form::label('country', 'Country') }}
                                                    {{ Form::select('country', array('0' => 'Select a country', 'Afghanistan' => 'Afghanistan', 'Albania' => 'Albania', 'Algeria' => 'Algeria', 'Bahrain' => 'Bahrain', 'Belgium' => 'Belgium', 'Brazil' => 'Brazil', 'Cambodia' => 'Cambodia', 'China' => 'China', 'Germany' => 'Germany', 'Hong Kong' => 'Hong Kong', 'Indonesia' => 'Indonesia', 'Malaysia' => 'Malaysia', 'Philippines' => 'Philippines', 'Singapore' => 'Singapore', 'Thailand ' => 'Thailand '), Input::old('category'), array('class' => 'form-control')) }}
                                                    </center>
                                                </div>
                                                <div class="form-group-text">
                                                    <center>
                                                    {{ Form::label('address', 'Address') }}
                                                    {{ Form::text('address', Input::old('address'), array('class' => 'form-control')) }}
                                                    </center>
                                                </div>
                                                
                                                {{ Form::submit('Proceed to Home!', array('class' => 'btn btn-primary1')) }}

                                                {{ Form::close() }}
                                            
                                       
                                    </section>
                      </div>
    <!-- /footer -->
    </body>
</html>

