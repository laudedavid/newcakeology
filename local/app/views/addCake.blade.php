<!DOCTYPE HTML>
<html>
    <head>

        <title>CAKEOLOGY</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="bootstrap/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="bootstrap/css/tabs.css" />
        <link rel="stylesheet" type="text/css" href="bootstrap/css/tabstyles.css" />
        <script src="js/modernizr.custom.js"></script>
        <link href="bootstrap/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="bootstrap/js/jquery.min.js"></script>
         <!-- Custom Theme files -->
        <link href="bootstrap/css/style.css" rel='stylesheet' type='text/css' />
         <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="bootstrap/js/modernizr.custom.js"></script>
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
     h1.style{
        color: pink;
        float:left;
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
                    <p><span class="cart"> </span>HOME PAGE</p>
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
                    <li>{{HTML::link('/home','Home', array('style' =>                     'color:white, hover: pink'))}}</li>
                    <li>{{HTML::link('/products','Products', array('style' => 'color:white, hover: pink'))}}</li>
                    <li>{{HTML::link('/orderTab','Order', array('style' => 'color:white, hover: pink'))}}</li>
                    <li class="active">{{HTML::link('/addCake','Create', array('style' => 'color:white, hover: pink'))}}</li>
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
                    <a href="index.html"><img src="bootstrap/images/logo1.png" title="Sweetcake" /></a>
                </div>
                <!-- logo -->
            </div>
        </div>
        <!-- /main-menu -->
        <!-- banner -->
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
                      <br>
                      <br>
                      <br>
                        <svg class="hidden">
                                <defs>
                                    <path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z"/>
                                </defs>
                        </svg>
                        <section>
                            <div class="tabs tabs-style-shape">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="#section-shape-1">
                                                <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                                
                                                <span>My Created Cakes</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#section-shape-2">
                                                <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                                <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                                <span>Create Pre-made Cakes</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#section-shape-3">
                                                <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                                <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                                <span>Create Cake Models</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#section-shape-4">
                                                <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                                <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                                <span>Create Toppers</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#section-shape-5">
                                                <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                                <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                                <span>Create Designs</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#section-shape-6">
                                                <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                                <span>Create Borders</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="content-wrap">
                                    <section id="section-shape-1">
                                                    <ul id="slider2">
                                                            <?php
                                                                foreach($cakes as $cake) {
                                                                echo '<li>';
                                                                echo '<div class="biseller-column">';
                                                                echo "<center>";
                                                                echo "<b>";
                                                                echo "$cake->category";
                                                                echo "</b>";
                                                                echo "</center>";
                                                                echo "</br>";
                                                                    echo '<img alt="" class="veiw-img" />';
                                                                        if($cake->image==NULL){
                                                                        echo '<img style="height:135px;" src="'.$cake->imageLB.'" />';
                                                                    }else
                                                                    {echo '<img style="height:135px;" src="'. URL::asset('img/upload/'.$cake->image).'" />';}
                                                                    echo '<div class="biseller-name">';
                                                                        echo "$cake->name";
                                                                        echo '<br>';
                                                                    echo '</div>';
                                                                    echo '<div class="add2cart">';
                                                                    
                                                                    if($cake->modelID>0)
                                                                    {
                                                                        echo '<span id="'.$cake->modelID.'" onclick="getSellCakeID('.$cake->id.')">';}
                                                                    else{
                                                                        echo '<span>';
                                                                    }
                                                                        
                                                                            if($cake->image==NULL)
                                                                                {
                                                                                    echo'EDIT';
                                                                    
                                                                        }
                                                                            else
                                                                                {echo HTML::link("updateCake/{$cake->id}",'EDIT');}

                                                                        echo '</span>';
                                                                        echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
                                                                        echo '<span>';
                                                                        echo HTML::link("delete/{$cake->id}",'DELETE');
                                                                        echo '</span>';
                                                                    echo '</div>';
                                                                echo '</div>';
                                                                echo '</li>';               

                                                                }
                                                                ?>
                                                        </ul>
                                                    <script type="text/javascript">
                 $(window).load(function() {
                    $("#slider2").flexisel({
                        visibleItems: 3,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,            
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: { 
                            portrait: { 
                                changePoint:480,
                                visibleItems: 1
                            }, 
                            landscape: { 
                                changePoint:640,
                                visibleItems: 2
                            },
                            tablet: { 
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });
                    
                });

        
               </script>
               <script type="text/javascript" src="bootstrap/js/jquery.flexisel.js"></script>
                                    
                                    </section>
                                    <section id="section-shape-2">
                                       <h1 class="style">Upload Pre-made Cakes</h1>
                                            <br><br>
                                   
                                                {{ Form::open(array('url' => 'addCake','files'=>true)) }}
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    {{ Form::label('name', 'Name') }}
                                                    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
                                                </div>

                                                <div class="form-group">
                                                    {{ Form::label('price', 'Price') }}
                                                    {{ Form::text('price', Input::old('price'), array('class' => 'form-control')) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('category', 'Category') }}
                                                    {{ Form::select('category', array('0' => 'Select a category', 'Birthday' => 'Birthday', 'Wedding' => 'Wedding', 'Anniversary' => 'Anniversary', 'Birthday & Anniversary' =>'Birthday & Anniversary','Wedding & Birthday'=> 'Wedding & Birthday', 'Anniversary & Wedding'=>'Anniversary & Wedding', 'Others' => 'Others'), Input::old('category'), array('class' => 'form-control')) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('description', 'Description') }}
                                                    {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('image', 'IMAGE', array('class' => 'col-sm-2 control-label')) }}
                                                    {{ Form::file('image') }}
                                                </div>
                                                {{ Form::submit('Upload Cake!', array('class' => 'btn btn-primary')) }}

                                                {{ Form::close() }}
                                            
                                       
                                    </section>
                                    <section id="section-shape-3">
                                        <h1 class="style">Customize Cake Model</h1>
                                            <br><br>

                                        {{ Form::open(array('url' => 'createCake','files'=>true)) }}
                                        {{ Form::submit('Click here to create model', array('class' => 'btn btn-primary')) }}
                                        {{ Form::close() }}
                                            
                                    </section>
                                    <section id="section-shape-4">
                                        <h1 class="style">Upload Toppers</h1>
                                            <br><br>
                                        {{ Form::open(array('url' => 'saveToppers','files'=>true)) }}
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    {{ Form::label('name', 'Name') }}
                                                    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('category', 'Category') }}
                                                    {{ Form::select('category', array('0' => 'Select a category', 'Birthday' => 'Birthday', 'Wedding' => 'Wedding', 'Anniversary' => 'Anniversary', 'Others' => 'Others'), Input::old('category'), array('class' => 'form-control')) }}
                                                </div>
                                                
                                                <div class="form-group">
                                                    {{ Form::label('image', 'IMAGE', array('class' => 'col-sm-2 control-label')) }}
                                                    {{ Form::file('image') }}
                                                </div>
                                                {{ Form::submit('Upload Toppers!', array('class' => 'btn btn-primary')) }}

                                                {{ Form::close() }}

                                    </section>
                                    <section id="section-shape-5">
                                        <h1 class="style">Upload Designs</h1>
                                            <br><br>
                                            {{ Form::open(array('url' => 'saveDesign','files'=>true)) }}
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    {{ Form::label('name', 'Name') }}
                                                    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
                                                </div>
                                                
                                                <div class="form-group">
                                                    {{ Form::label('image', 'IMAGE', array('class' => 'col-sm-2 control-label')) }}
                                                    {{ Form::file('image') }}
                                                </div>
                                                {{ Form::submit('Upload Designs!', array('class' => 'btn btn-primary')) }}

                                                {{ Form::close() }}
                                    </section>
                                    <section id="section-shape-6">
                                        <h1 class="style">Upload Borders</h1>
                                            <br><br>
                                            <br><br>
                                            {{ Form::open(array('url' => 'saveBorder','files'=>true)) }}
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    {{ Form::label('name', 'Name') }}
                                                    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
                                                </div>
                                                
                                                <div class="form-group">
                                                    {{ Form::label('image', 'IMAGE', array('class' => 'col-sm-2 control-label')) }}
                                                    {{ Form::file('image') }}
                                                </div>
                                                {{ Form::submit('Upload Borders!', array('class' => 'btn btn-primary')) }}

                                                {{ Form::close() }}
                                    </section>
                                </div><!-- /content -->
                            </div><!-- /tabs -->
                        </section>
                    <script src="bootstrap/js/cbpFWTabs.js"></script>
                    <script>
                        (function() {

                            [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                                new CBPFWTabs( el );
                            });

                        })();
                    </script>
                        <div class="clearfix"> </div>
                    </div>
                   
                     
</body>
