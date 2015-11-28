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
						<li  class="active">{{HTML::link('/myaccount','My Account', array('style' => 'color:white, hover: pink'))}}</li>
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
					<li>{{HTML::link('/singlepageSeller','Sellers', array('style' => 'color:white, hover: pink'))}}</li>
					<li>{{HTML::link('/addCake','Create', array('style' => 'color:white, hover: pink'))}}</li>					<div class="clearfix"> </div>
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
					<img src="bootstrap/images/logo1.png" title="Sweetcake" />
				</div>
				<!-- logo -->
			</div>
		</div>

		<!-- SLIDER SOMEONE ORDERED CAKES -->
		<div class="biseller-info">
          		<div class="container">
						<h2>Cakes</h2>
						<h3 class="new-models">Someone Ordered Your Cakes</h3>
							<ul id="slider1">
									<?php
										foreach($makers as $maker) {
										echo '<li>';
										echo '<div class="biseller-column">';
										echo "<center>";
										echo "<b>";
										echo "$maker->category";
										echo "</b>";
										echo "</center>";
										echo "</br>";
											echo '<img alt="" class="veiw-img" />';
											
											if($maker->image==NULL){
												echo '<img src="'.$maker->imageLB.'" />';
											}else
											{echo '<img src="'. URL::asset('img/upload/'.$maker->image).'" />';}
											echo '<div class="biseller-name">';
												echo "<b>";
												echo "$maker->name";
												echo '<br>';
												echo "$maker->description";
												echo '<br>';
												echo "$maker->price";
												echo "</b>";
												echo '<br>';
												echo 'Ordered by: ';
												echo "<u><b>";
												echo "$maker->buyersName";
												echo "</u></b>";
												echo '<br>';
												echo "$maker->buyersAddress";
												echo '<br>';
											echo '</div>';
											echo '<div class="add2cart">';
						   						echo '<span>';
						    					echo HTML::link("/delivered/{$maker->id}",'DELIVERED');
						    					echo '</span>';
											echo '</div>';
										echo '</div>';
					 					echo '</li>';				

										}
										?>
					 			</ul>
							
					 		</div>
						</div>		
					

			<script type="text/javascript">
				 $(window).load(function() {
					$("#slider1").flexisel({
						visibleItems: 3,
						animationSpeed: 1000,
						autoPlay: false,
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
		
		<!--SLIDER 1 - CREATED CAKES-->
		<div class="biseller-info">
          		<div class="container">
						
						<h3 class="new-models">My Created Cake</h3>
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
												echo '<img src="'.$cake->imageLB.'" />';
											}else
											{echo '<img src="'. URL::asset('img/upload/'.$cake->image).'" />';}
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
							
					 		</div>
						</div>		
					

			<script type="text/javascript">
				 $(window).load(function() {
					$("#slider2").flexisel({
						visibleItems: 3,
						animationSpeed: 1000,
						autoPlay: false,
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
				
		

		<!--SLIDER 2 - ORDERED CAKES-->
		<div class="best-seller">
				<div class="container">
						<h3 class="new-models">MY ORDERED CAKES</h3>
						<ul id="slider3">
							<?php
										foreach($orders as $order) {
										echo '<li>';
										echo '<div class="biseller-column">';
										echo "<center>";
										echo "<b>";
										echo "$order->category";
										echo "</b>";
										echo "</center>";
										echo "</br>";
											echo '<img alt="" class="veiw-img" />';
											if($order->image==NULL){
												echo '<img src="'.$order->imageLB.'" />';
											}else
											{echo '<img src="'. URL::asset('img/upload/'.$order->image).'" />';}
											
											echo '<div class="biseller-name">';
												echo "$order->name";
												echo '<br>';
											echo '</div>';
											echo '<div class="add2cart">';
										
						    					if($order->modelID>0)
											{	
												echo '<span id="'.$order->modelID.'" onclick="getOrderCakeID('.$order->id.')">';}
						   					else{
						   						echo '<span>';
						   					}
						   						
						   							if($order->image==NULL)
						   								{
						   									echo'EDIT';
						   					
						   						}
						   							else
						    							{echo HTML::link("updateCake/{$order->id}",'EDIT');}

						    					echo '</span>';
						    					echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
						   						echo '<span>';
						    					echo HTML::link("/cancelOrder/{$order->id}",'CANCEL');
						    					echo '</span>';
											echo '</div>';
										echo '</div>';
					 					echo '</li>';				

										}
					 				?>
						</ul>
					</div>
				</div>
		
		<script type="text/javascript">
				 $(window).load(function() {
					$("#slider3").flexisel({
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

				 		 function getSellCakeID(cid)
				 {

				 	
				 	var cid=cid;
				 
				 	$.ajax({
				url: '/updateCakeModel',
				type: 'GET',
				data: {'id':cid,
						
						
				}, success:function(data){
				//ahahaha naa taghapan
			
				 var locationtext = 'updateCakeModel?id=';
                var location = locationtext.concat(cid);
                window.location.href = location
                  
                }

			}); 	
				
				 }

		 		 function getOrderCakeID(cid)
				 {

				 	
				 	var cid=cid;
				 	
				 	$.ajax({
				url: '/updateCakeModelOrder',
				type: 'GET',
				data: {'id':cid,
						
						
				}, success:function(data){
				//ahahaha naa taghapan
			
				 var locationtext = 'updateCakeModelOrder?id=';
                var location = locationtext.concat(cid);
                window.location.href = location
                  
                }

			}); 	
				
				 }




			   </script>
			   <script type="text/javascript" src="bootstrap/js/jquery.flexisel.js"></script>
					

	
		
	<div class="clear"></div>
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
						<img src="bootstrap/images/foot.png" title="name"/>
						<a href="#"><i class="fb"> </i></a>
					</div>
					<div class="twet">		
						<img src="bootstrap/images/foot.png" title="name"/>
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
				<p>Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
			</div>
		</div>
	</div>
	<!-- /footer -->
	</body>
</html>

