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

     div.form-group-text{
        width: 700px;
        padding-left: 40px;
     }
     
     li.spacing{
        padding-left: 20px;
        padding-top:10px;
     }
     div.topheader{
        background-color: pink;
     }
     
    .form-control{
        width:200px;
        height: 35px;
        border-radius: 5px;
    }
    .btn.btn-primary1{
        background: transparent radial-gradient(ellipse at center center , #4E0205 0%, #923B4F 50%, #4E0205 100%) repeat scroll 0% 0%;
padding: 0.7em 0em;
color: #FFF;
font-size: 1em;
text-transform: uppercase;
text-decoration: none;
border-radius: 0.3em;
width: 50%;
margin: 1em auto 0px;
display: block;
    }
    a {
    color:white;
    text-decoration: none;
}
    
    </style>
    <body>
        {{ HTML::script('bootstrap/js/jquery.min.js') }}
    {{ HTML::style('bootstrap/css/style.css') }}
    {{ HTML::style('bootstrap/css/bootstrap.css') }}
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
                    <p><span class="cart"> </span>{{HTML::link('/home','Home Page')}}</p>
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
        <div class="main-menu">
            <div class="container">
            <div class="head-nav">
                <span class="menu"> </span>
                <ul>
                    <li>{{HTML::link('/home','Home', array('style' => 'color:white, hover: pink'))}}</li>
                    <li>{{HTML::link('/products','Products', array('style' => 'color:white, hover: pink'))}}</li>
                    <li>{{HTML::link('/orderTab','Order', array('style' => 'color:white, hover: pink'))}}</li>
                    <li>{{HTML::link('/addCake','Create', array('style' => 'color:white, hover: pink'))}}</li>
                    <div class="clearfix"> </div>
                </ul>
            </div>  
                <!-- script-for-nav -->
                    <script>
                        $( "span.menu" ).click(function() {
                          $( ".head-nav ul" ).slideToggle(300, function() {
                            // Animation complete.
                          });
                        });
                    </script>
                <!-- script-for-nav -->

                <!-- logo -->
                <div class="logo">
                    {{HTML::image('bootstrap/images/logo1.png')}}
                </div>
                <!-- logo -->
            </div>
        </div>
        <!-- /top-header -->
        <div class="container">
                <div class="img-slider">
                        <!----start-slider-script---->
                    <script src="bootstrap/js/responsiveslides.min.js"></script>
                     <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                          // Slideshow 4
                          $("#slider4").responsiveSlides({
                            auto: true,
                            pager: true,
                            nav: true,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                              $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                              $('.events').append("<li>after event fired.</li>");
                            }
                          });
                    
                        });
                      </script>

                        <div class='form'>
                            <h1>Edit Cake!</h1>

                            <!-- if there are creation errors, they will show here -->


                            {{ Form::open(array('url' => 'updateCake','files'=>true)) }}

                                <div class="form-group-text">
                                    <input id="id" name="id" value="{{$edit['id']}}" type="hidden" class="form-control" required>
                                            
                                </div>
                                <br />
                                <div class="form-group-text"><label for="name">Name</label>
                                    <input id="name" name="name" value="{{$edit['name']}}" type="text" class="form-control" required>
                                            
                                </div>
                                <br />
                                <div class="form-group-text"><label for="price">Price</label>
                                    <input id="price" name="price" value="{{$edit['price']}}" type="text" class="form-control" required>
                                            
                                </div>
                                <br />
                                <div class="form-group-text">
                                  <label label-default="" class="control-label">Category</label>
                                  <br>
                                     <div class="col-md-5">
                                                <select class="form-control" name="category" id="category">
                                                    <option value="{{$edit['category']}}">{{$edit['category']}}</option>
                                                    <option value="Birthday">Birthday</option>
                                                    <option value="Wedding">Wedding</option>
                                                    <option value="Anniversary">Anniversary</option>
                                                </select>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="form-group-text" class="form-control"><label for="description">Address</label>
                                    <input id="description" name="description"  value="{{$edit['description']}}" type="text" class="form-control" required>
                                            
                                </div></br></br></br>
                                
                                <div class="form-group-text">
                                    {{ Form::label('image', 'IMAGE', array('class' => 'col-sm-2 control-label')) }}
                                    {{ Form::file('image') }}
                                </div>

                                <div>
                                {{ Form::submit('Update Cake!', array('class' => 'btn btn-primary1')) }}
                                </div>
                                <br>
                                <br>
                            {{ Form::close() }}
                        </div>
                        <div class="clearfix"> </div>
                    </div>
        </body>
    </html>
