<!DOCTYPE HTML>
<html>
	<head>
		<title>CAKEOLOGY</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	
   		 <!-- Custom Theme files -->
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		

	</head>
	<style>
	 a{
	 	color:white;
	 }
	 a.hover{
	 	color:pink;
	 }
	 .form-group-text {
  display: block;
  width: 100%;
  height: 20px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.btn1 {
	background-color: #FF3E91;
	color:white;
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  height:31px;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-image: none;
  border: 1px solid transparent;
  
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
					<!--<img src="bootstrap/images/logo1.png" title="Sweetcake" /></a> -->
					{{HTML::image('bootstrap/images/logo1.png')}}
				</div>
				<!-- logo -->
			</div>
		</div>
				<!-- logo -->
		
		<!-- /main-menu -->
	<!-- service -->
	<div class="biseller-info">
          		<div class="container">
						<h2>Cakes</h2>
							<h3 class="new-models">All Cakes</h3>
							<ul id="slider">
									<?php
										foreach($views as $view) {
										echo '<li>';
										echo '<div class="biseller-column">';
										echo "<center>";
										echo "<b>";
										echo "$view->category";
										echo "</b>";
										echo "</center>";
										echo "</br>";
											echo '<img alt="" class="veiw-img" />';
											if($view->image==NULL){
												echo '<img style="height:135px;" src="'.$view->imageLB.'" />';
											}else
											{echo '<img style="height:135px;" src="'. URL::asset('img/upload/'.$view->image).'" />';}
											echo '<div class="biseller-name">';
												echo "<b>";
												echo "$view->name";
												echo "</b>";
												echo '<br>';
												echo "$view->description";
												echo '<br>';
												echo "<b>";
												echo "$view->price";
												echo "</b>";
											echo '</div>';
											echo Form::open(array('url' => "order/{$view->id}",'files'=>true));
													echo "<div class='form-group'>";
														echo Form::text('date', 'Delivery Date', array('class' => 'datepicker'));
													echo "</div>";												
													echo "<div class='form-group'>";
	                                                	echo  "<textarea name='message' placeholder='Message to Seller' cols='25' rows='3'>";
	                                                	echo "</textarea>";
	                                                echo "</div>"; 
											
											echo '<div class="add2cart">';
						    					
						    					echo Form::submit('ORDER', array('class' => 'btn1'));
						    					echo Form::close();

										echo '</div>';
					 					echo '</li>';				

										}
					 				?>
					 			</ul>
					 			</div>
					 			<script type="text/javascript">
					  $(function() {
					    $( ".datepicker" ).datepicker({
					      changeMonth: true,
					      changeYear: true
					    });
					  });
					  </script>
					  
					 		 {{ HTML::script('//code.jquery.com/jquery-1.10.2.js') }}

			<script type="text/javascript">
				 $(window).load(function() {
					$("#slider").flexisel({
						visibleItems: 4,
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
			   {{ HTML::script('bootstrap/js/jquery.flexisel.js') }}
			   
			   {{ HTML::script('//code.jquery.com/ui/1.11.2/jquery-ui.js') }}
				  <script>
				  $(function() {
				    $( ".datepicker" ).datepicker();
				  });
				  </script>	
			<div class="clearfix"></div>
</div>
						
					

	<!-- footer -->
	<div class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="col-md-3 location">
                    <h4>location</h4>
                    <p>#04 Dist.City,State,PK</p>
                    <h4>hours</h4>
                    <p>Weekdays 7 a.m.-7 p.m.</p>
                    <p>Weekends 8 a.m.-7 p.m.</p>
                    <p>Call for Holidays Hours.</p>
                </div>
                <div class="col-md-3 customer">
                    <h4>customer service</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. </p>
                    <h4>phone</h4>
                    <h6>1(234)567-8910</h6>
                    <h4>contact us</h4>
                    <h6>contact us page.</h6>
                </div>
                <div class="col-md-3 social">
                    <h4>get social</h4>
                    <div class="face-b">
                        <!-- <img src="bootstrap/images/foot.png" title="name"/> -->
                        {{HTML::image('bootstrap/images/foot.png')}}
                        <a href="#"><i class="fb"> </i></a>
                    </div>
                    <div class="twet">      
                        {{HTML::image('bootstrap/images/foot.png')}}
                            <a href="#"><i class="twt"> </i></a>
                    </div>  
                </div>
                <div class="col-md-3 sign">
                    <h4>sign up for news later</h4> 
                        <form>
                        <input type="text" class="text" value="YOUR EMAIL" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'YOUR EMAIL ';}">
                        </form>
                </div>
                    <div class="clearfix"> </div>
            </div>
            <div class="footer-bottom">
                <p>DEVELOPERS: CARULASAN, KIMBERLY JEAN && LAUDE, DAVID</p>
            </div>
        </div>
    </div>
	
	<!-- /footer -->
	</body>
</html>
