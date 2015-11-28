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
    <!-- html -->
    {{ HTML::script('filter/jquery.min.js') }}
    {{ HTML::script('bootstrap/js/jquery.min.js') }}
    {{ HTML::style('bootstrap/css/style.css') }}
    {{ HTML::style('bootstrap/css/bootstrap.css') }}

    <!-- cakemaker & dragdrop -->
    {{ HTML::style('css/style.css') }}
    {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}
    {{ HTML::script('bootstrap/js/jquery.min.js') }}
    {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js') }}
    {{ HTML::script('scripts/dragndrop.js') }}
  
    {{ HTML::script('build/three.min.js') }}
    {{ HTML::script('jsModel/libs/stats.min.js') }}
    {{ HTML::script('jsModel/Detector.js') }}


 <!--hiding nav  -->
    {{ HTML::script('hidingNav/hidingnav.js') }}
    {{ HTML::style('hidingNav/hidingnav.css') }}

    <!-- css color picker -->
    {{ HTML::style('colorpicker/lib/bootstrap-3.0.3/css/bootstrap.min.css') }}
    {{ HTML::style('colorpicker/lib/bootstrap-colorselector-0.2.0/css/bootstrap-colorselector.css') }}
    {{ HTML::style('colorpicker/css/docs.css') }}
    {{ HTML::style('colorpicker/css/prettify.css') }}

    
   <!-- actionTo -->
       {{ HTML::script('scripts/actionTo.js') }}


  <!-- alertbox -->  

   {{ HTML::script('dist/sweetalert-dev.js') }}
   {{ HTML::style('dist/sweetalert.css') }}

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
          <li>{{HTML::link('/addCake','Create', array('style' => 'color:white, hover: pink'))}}</li>          <div class="clearfix"> </div>
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
          <img src="bootstrap/images/logo1.png" title="Sweetcake" /></a>
        </div>
        <!-- logo -->
      </div>
    </div>
        <!-- /main-menu -->
<!-- <img src="{{$findCaketogenerateModel->image}}"  style="position:relative; height=100px; width=100px;" /> -->
        <!-- INVI/RIKImartin nga textbox para kuha2 sa value para mahimong model-->

     <input required  type = "text" id ="layer1" name = "layer1" hidden=true value="{{$findCaketogenerateModel->layer1}}" />
    <input required  type = "text" id ="layer2" name = "layer2" hidden=true value="{{$findCaketogenerateModel->layer2}}" />
    <input required  type = "text" id ="layer3" name = "layer3" hidden=true value="{{$findCaketogenerateModel->layer3}}" />
       <!--  displaytoper() helper para ma sudlan ang textbox, ang e return ani ky ang image sa na query para sa model e pasa -->
        @if($findCaketogenerateModel->layer1topper>0)
        <input required  type = "text" id ="layer1topper" name = "layer1topper"  hidden=true  value="{{Helper::ReturnImage($findCaketogenerateModel->layer1topper)}}" />    
        @else <input required  type = "text" id ="layer1topper" name = "layer1topper"  hidden=true  value="{{$findCaketogenerateModel->layer1topper}}" />    
        @endif
             
             @if($findCaketogenerateModel->layer2topper>0)
            <input required  type = "text" id ="layer2topper" name = "layer2topper"  hidden=true  value="{{Helper::ReturnImage($findCaketogenerateModel->layer2topper)}}" />    
            @else <input required  type = "text" id ="layer2topper" name = "layer2topper"   hidden=true value="{{$findCaketogenerateModel->layer2topper}}" />    
            @endif
                
                 @if($findCaketogenerateModel->layer3topper>0)
                <input required  type = "text" id ="layer3topper" name = "layer3topper"  hidden=true  value="{{Helper::ReturnImage($findCaketogenerateModel->layer3topper)}}" />    
                @else <input required  type = "text" id ="layer3topper" name = "layer3topper"  hidden=true value="{{$findCaketogenerateModel->layer3topper}}" />    
                 @endif
                 <!-- color layer -->
                 <input type="text" id="colorColorLayer1" hidden=true   value="{{$findCaketogenerateModel->colorlayer1}}" />
                 <input type="text" id="colorColorLayer2" hidden=true   value="{{$findCaketogenerateModel->colorlayer2}}" />
                 <input type="text" id="colorColorLayer3" hidden=true   value="{{$findCaketogenerateModel->colorlayer3}}" />
          <!-- BORDERS -->
          

              @if($findCaketogenerateModel->borderlayer1lower>0)
              <input required  type = "text" id ="borderlayer1lower" name = "borderlayer1lower"  hidden=true  value="{{Helper::ReturnImage($findCaketogenerateModel->borderlayer1lower)}}" />    
              @else <input required  type = "text" id ="borderlayer1lower" name = "borderlayer1lower"  hidden=true  value="{{$findCaketogenerateModel->borderlayer1lower}}" />    
              @endif
             
             @if($findCaketogenerateModel->borderlayer1upper>0)
            <input required  type = "text" id ="borderlayer1upper" name = "borderlayer1upper"  hidden=true  value="{{Helper::ReturnImage($findCaketogenerateModel->borderlayer1upper)}}" />    
            @else <input required  type = "text" id ="borderlayer1upper" name = "borderlayer1upper"   hidden=true value="{{$findCaketogenerateModel->borderlayer1upper}}" />    
            @endif

                @if($findCaketogenerateModel->borderlayer2lower>0)
              <input required  type = "text" id ="borderlayer2lower" name = "borderlayer2lower"  hidden=true  value="{{Helper::ReturnImage($findCaketogenerateModel->borderlayer2lower)}}" />    
              @else <input required  type = "text" id ="borderlayer2lower" name = "borderlayer2lower"  hidden=true  value="{{$findCaketogenerateModel->borderlayer2lower}}" />    
              @endif
             
             @if($findCaketogenerateModel->borderlayer2upper>0)
            <input required  type = "text" id ="borderlayer2upper" name = "borderlayer2upper"  hidden=true  value="{{Helper::ReturnImage($findCaketogenerateModel->borderlayer2upper)}}" />    
            @else <input required  type = "text" id ="borderlayer2upper" name = "borderlayer2upper"   hidden=true value="{{$findCaketogenerateModel->borderlayer2upper}}" />    
            @endif

               @if($findCaketogenerateModel->borderlayer3lower>0)
              <input required  type = "text" id ="borderlayer3lower" name = "borderlayer3lower"  hidden=true  value="{{Helper::ReturnImage($findCaketogenerateModel->borderlayer3lower)}}" />    
              @else <input required  type = "text" id ="borderlayer3lower" name = "borderlayer3lower"  hidden=true  value="{{$findCaketogenerateModel->borderlayer3lower}}" />    
              @endif
             
             @if($findCaketogenerateModel->borderlayer3upper>0)
            <input required  type = "text" id ="borderlayer3upper" name = "borderlayer3upper"  hidden=true  value="{{Helper::ReturnImage($findCaketogenerateModel->borderlayer3upper)}}" />    
            @else <input required  type = "text" id ="borderlayer3upper" name = "borderlayer3upper"   hidden=true value="{{$findCaketogenerateModel->borderlayer3upper}}" />    
            @endif


             @if($findCaketogenerateModel->decoration1stlayermidmid>0)
            <input required  type = "text" id ="decoration1stlayermidmid" name = "decoration1stlayermidmid"  hidden=true  value="{{Helper::ReturnImage($findCaketogenerateModel->decoration1stlayermidmid)}}" />    
            @else <input required  type = "text" id ="decoration1stlayermidmid" name = "decoration1stlayermidmid"   hidden=true value="{{$findCaketogenerateModel->decoration1stlayermidmid}}" />    
            @endif
                
                 
                




 <!--END INVI/RIKImartin para kuha2 sa value para sa cake -->






     
<!-- <div class="container"> -->
@if($findCaketogenerateModel->layer1>0&&$passFindLayer=='BaseLayer')
    <section id="colorselectors" style="position:absolute; left:1300px;top:690px;"> 
        <select id="colorselector_1" class="colorselector_1" >
           <option value="{{$findCaketogenerateModel->colorlayer1}}" data-color="{{$findCaketogenerateModel->colorlayer1}}" selected="selected">selected</option>
          <option value="#A0522D" data-color="#A0522D">sienna</option>
          <option value="#FF4500" data-color="#FF4500">orangered</option>
          <option value="#008B8B" data-color="#008B8B">darkcyan</option>
          <option value="#B8860B" data-color="#B8860B">darkgoldenrod</option>
          <option value="#32CD32" data-color="#32CD32">limegreen</option>
          <option value="#FFD700" data-color="#FFD700">gold</option>
          <option value="#48D1CC" data-color="#48D1CC">mediumturquoise</option>
          <option value="#87CEEB" data-color="#87CEEB">skyblue</option>
          <option value="#FF69B4" data-color="#FF69B4">hotpink</option>
          <option value="#804000" data-color="#804000">brown</option>
          <option value="#87CEFA" data-color="#87CEFA">lightskyblue</option>
          <option value="#6495ED" data-color="#6495ED">cornflowerblue</option>
          <option value="#DC143C" data-color="#DC143C">crimson</option>
          <option value="#FF8C00" data-color="#FF8C00">darkorange</option>
          <option value="#C71585" data-color="#C71585">mediumvioletred</option>
          <option value="#1F0F00" data-color="#1F0F00">darkbrown</option>
          <option value="#FFFF99" data-color="#FFFF99">dirtywhite</option>
        </select> <h4>color</h4>
         <input type="text" id="colorColor" hidden=true />

    </section>
@endif

@if($findCaketogenerateModel->layer2>0&&$passFindLayer=='BaseLayer')
    <section id="colorselectors" style="position:absolute; left:1300px;top:590px;"> 
        <select id="colorselector_2" class="colorselector_2" >
           <option value="{{$findCaketogenerateModel->colorlayer2}}" data-color="{{$findCaketogenerateModel->colorlayer2}}" selected="selected">selected</option>
          <option value="#A0522D" data-color="#A0522D">sienna</option>
          <option value="#FF4500" data-color="#FF4500">orangered</option>
          <option value="#008B8B" data-color="#008B8B">darkcyan</option>
          <option value="#B8860B" data-color="#B8860B">darkgoldenrod</option>
          <option value="#32CD32" data-color="#32CD32">limegreen</option>
          <option value="#FFD700" data-color="#FFD700">gold</option>
          <option value="#48D1CC" data-color="#48D1CC">mediumturquoise</option>
          <option value="#87CEEB" data-color="#87CEEB">skyblue</option>
          <option value="#FF69B4" data-color="#FF69B4">hotpink</option>
          <option value="#804000" data-color="#804000">brown</option>
          <option value="#87CEFA" data-color="#87CEFA">lightskyblue</option>
          <option value="#6495ED" data-color="#6495ED">cornflowerblue</option>
          <option value="#DC143C" data-color="#DC143C">crimson</option>
          <option value="#FF8C00" data-color="#FF8C00">darkorange</option>
          <option value="#C71585" data-color="#C71585">mediumvioletred</option>
          <option value="#1F0F00" data-color="#1F0F00">darkbrown</option>
          <option value="#FFFF99" data-color="#FFFF99">dirtywhite</option>
        </select> <h4>color</h4>
    </section>
@endif

@if($findCaketogenerateModel->layer3>0&&$passFindLayer=='BaseLayer')
    <section id="colorselectors" style="position:absolute; left:1300px;top:500px;"> 
        <select id="colorselector_3" class="colorselector_3" >
           <option value="{{$findCaketogenerateModel->colorlayer3}}" data-color="{{$findCaketogenerateModel->colorlayer3}}" selected="selected">selected</option>
          <option value="#A0522D" data-color="#A0522D">sienna</option>
          <option value="#FF4500" data-color="#FF4500">orangered</option>
          <option value="#008B8B" data-color="#008B8B">darkcyan</option>
          <option value="#B8860B" data-color="#B8860B">darkgoldenrod</option>
          <option value="#32CD32" data-color="#32CD32">limegreen</option>
          <option value="#FFD700" data-color="#FFD700">gold</option>
          <option value="#48D1CC" data-color="#48D1CC">mediumturquoise</option>
          <option value="#87CEEB" data-color="#87CEEB">skyblue</option>
          <option value="#FF69B4" data-color="#FF69B4">hotpink</option>
          <option value="#804000" data-color="#804000">brown</option>
          <option value="#87CEFA" data-color="#87CEFA">lightskyblue</option>
          <option value="#6495ED" data-color="#6495ED">cornflowerblue</option>
          <option value="#DC143C" data-color="#DC143C">crimson</option>
          <option value="#FF8C00" data-color="#FF8C00">darkorange</option>
          <option value="#C71585" data-color="#C71585">mediumvioletred</option>
          <option value="#1F0F00" data-color="#1F0F00">darkbrown</option>
          <option value="#FFFF99" data-color="#FFFF99">dirtywhite</option>
        </select> <h4>color</h4>
    </section>
@endif

<!--     </div> -->

<!-- hiding shit -->
<nav class="navbar navbar-fixed-left navbar-minimal animate" role="navigation" style="width:90px; position:absolute;">
        <div class="navbar-toggler">

            <center><h4>Menu</h4></center>
            <span class="menu-icon"></span>
        </div>
        <ul class="navbar-menu ">
            <li>
                <a class="animate">
                   <center><span class="glyphicon glyphicon-tasks"> Layers</span></center>

                
<!-- <span class="desc animate"> Layers  -->
  <span class="desc animate" style="width:200px; top:-30px">

    {{ Form::open(array('url' => 'findLayer','files'=>true)) }}
    Layers{{ Form::select('findLayer', array('BaseLayer' => 'BaseLayer', 'Toppers' => 'Toppers', 'Borders' => 'Borders', 'Decoration' => 'Decoration'), Input::old('findLayer'), array('class' => 'form-control','id' => 'findLayer')) }}
   <center> {{ Form::submit('GO!', array('class' => 'btn btn-primary')) }}</center>
    {{ Form::close() }}
</span>

<!--  <select name="ChooseLayer" id="ChooseLayer" style="height:60px; background-color:gray; top:19px;" class="desc animate"  onchange="report(this.value)" >
   
  <option value="BaseLayer">Base Layers </option>
  <option value="Toppers">Toppers</option>
  <option value="Borders">Borders</option>
 
<!-- </span> -->



                </a>
            </li>
  
            <li>
                <a class="animate">
                      <center><span class="glyphicon glyphicon-save"> Save</span></center>
                    <span class="desc animate" style="width:200px;">
                                                

                                    
                                      <div id="actionSelector" class="form-group"> 
                                         <h5>To:</h5>     
                                              <select id="cakeInfoAction" class="form-control" >
                                                <option value="0">
                                               
                                                Select
                                               
                                                </option>
                                                <option value="Buy">Buy</option>
                                                <option value="Sell">Sell</option>
                                              </select> 
                                         </div>
                                   <script>

                                              //$( "#filter" ).change(function() {
        jQuery.fn.filterByText = function(textbox, selectSingleMatch) {
        return this.each(function() {
            var select = this;
            var options = [];
            $(select).find('option').each(function() {
                options.push({value: $(this).val(), text: $(this).text()});
            });
            $(select).data('options', options);
            $(textbox).bind('change keyup', function() {
                var options = $(select).empty().data('options');
                var search = $.trim($(this).val());
                var regex = new RegExp(search,"gi");
              
                $.each(options, function(i) {
                    var option = options[i];
                    if(option.text.match(regex) !== null) {
                        $(select).append(
                           $('<option>').text(option.text).val(option.value)
                        );
                    }
                });
                if (selectSingleMatch === true && $(select).children().length === 1) {
                    $(select).children().get(0).selected = true;
                }
            });            
        });
    };
                                 

                                  $(function() {

 

        $('#Sellers').filterByText($('#textbox'), true);
    });                  


                                              // });
                                         
                                            </script>
                                          

                                  
                                          <div id="Sellers1" class="form-group"  hidden="true">
                                           <div class="form-group">
                                                    {{ Form::label('filter', 'Filter Sellers By:') }}
                                                    {{ Form::text('textbox', Input::old('textbox'), array('class' => 'form-control','id'=>'textbox')) }}
   

                                                </div>
                                           <h5>Seller:</h5>  
                                                <select id="Sellers" class="form-control" >
                                                @foreach($sellers as $seller)
                                                <option value="{{$seller->fbId}}">
                                                {{$seller->name}}
                                              
                                                </option>
                                                @endforeach
                                              </select>

                                             
                                           
                                             
                                         </div>

                                                <div class="form-group">
                                                    {{ Form::label('name', 'Name') }}
                                                    {{ Form::text('name', Input::old('name'), array('class' => 'form-control','id'=>'cake_name')) }}
                                                </div>

                                                <div class="form-group">
                                                    {{ Form::label('price', 'Price') }}
                                                    {{ Form::text('price', Input::old('price'), array('class' => 'form-control','id'=>'cake_price')) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('category', 'Category') }}
                                                    {{ Form::select('category', array('Birthday' => 'Birthday', 'Wedding' => 'Wedding', 'Anniversary' => 'Anniversary', 'Others' => 'Others'), Input::old('category'), array('class' => 'form-control','id'=>'cake_category','multiple' => 'multiple')) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('description', 'Description') }}
                                                    {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control','id'=>'cake_description')) }}
                                                </div>
                                             <center>   {{ Form::submit('Save', array('class' => 'btn btn-primary','id'=>'printScreen','onclick'=>'printScreen()')) }}</center>


                    </span>
                  
                </a>
            </li>
            <li>
                <a href="#" id="#atay" onclick="atay()" class="animate">
                 <center><span class="glyphicon glyphicon-trash"> Delete</span></center>
                    <span class="desc animate">
                     
                </span>
                    <!-- <span class="glyphicon glyphicon-comment"></span> -->
                </a>
            </li>
        </ul>
    </nav>


<!-- modelmaker -->
<script>
    

            var container, stats;
            var camera, scene, renderer;
            var group;
            var targetRotation = 0;
            var targetRotationOnMouseDown = 0;
            var mouseX = 0;
            var mouseXOnMouseDown = 0;
            var windowHalfX = window.innerWidth / 2;
            var windowHalfY = window.innerHeight / 2;

            init();
            animate();

            function init() {

                container = document.createElement( 'div' );
                document.body.appendChild( container );
                var info = document.createElement( 'div' );

              
                var axis = new THREE.Vector3(0.5,0.5,0);
                scene = new THREE.Scene();
                camera = new THREE.PerspectiveCamera( 30, window.innerWidth / window.innerHeight, 20, 1000 );
                camera.position.set( 0, 150, 400 );
                scene.add( camera );
                var light = new THREE.PointLight( 0xffffff, 0.8 );
                light.position.set( 0, 200, 00 );
                camera.add( light );
                group = new THREE.Group();
                group.position.y =100;
                group.position.x = 50;

                scene.add( group );


                function addShape(type, shape, extrudeSettings, texture ,color, x, y, z, rx, ry, rz, s ) {

                    // 3d shape
                    var transparent;
                      
                      if(type=='Border')
                      {transparent=true;}
                    else{transparent=false;}
                   var geometry = new THREE.ExtrudeGeometry( shape, extrudeSettings);
                    var mesh = new THREE.Mesh( geometry, new THREE.MeshPhongMaterial( {  side: THREE.DoubleSide, color:color, map: texture, ambient: color ,transparent: transparent} ) );
                    mesh.position.set( x, y, z  );
                    mesh.rotation.set( rx, ry, rz );
                    mesh.scale.set( s, s, s );
                    group.add( mesh );


                   /* var crateTexture = new THREE.ImageUtils.loadTexture('textures/crate.gif');
                    crateTexture.wrapS = crateTexture.wrapT = THREE.RepeatWrapping;
                    crateTexture.repeat.set( 5, 5 );
                    
                    
                     var geometry = new THREE.CubeGeometry( 50, 50, 50);
                    var material = new THREE.MeshPhongMaterial( { map:crateTexture ,transparent: true } );
                    mesh = new THREE.Mesh(geometry, material );
                    mesh.position.x = -75;
                    mesh.position.y = 80;
                    mesh.position.z = -75;
                    group.add( mesh );*/

                    //toper

                var layer1topper = document.getElementById("layer1topper").value;
                var layer2topper = document.getElementById("layer2topper").value;
                var layer3topper = document.getElementById("layer3topper").value;
                var decoration1stlayermidmid = document.getElementById("decoration1stlayermidmid").value;
                var locationtext = 'img/upload/layers/';
                var toppertexture3 = locationtext.concat(layer3topper);
                var toppertexture2 = locationtext.concat(layer2topper);
                var toppertexture1 = locationtext.concat(layer1topper);
                var decoration1stlayermidmidtexutre = locationtext.concat(decoration1stlayermidmid);

                                                          // l    h   w
                if(layer3topper!=0){
                    var geometry = new THREE.CubeGeometry( 50, 50, 1);
                    var material = new THREE.MeshPhongMaterial( { map: THREE.ImageUtils.loadTexture(toppertexture3),transparent: true } );
                    mesh = new THREE.Mesh(geometry, material );
                    mesh.position.x = -5;
                    mesh.position.y =75;
                    mesh.position.z = -5;
                    group.add( mesh );
                }
                  if(layer2topper!=0){
                    var geometry = new THREE.CubeGeometry( 50, 50, 1);
                    var material = new THREE.MeshPhongMaterial( { map: THREE.ImageUtils.loadTexture(toppertexture2),transparent: true } );
                    mesh = new THREE.Mesh(geometry, material );
                    mesh.position.x = -5;
                    mesh.position.y = 55;
                    mesh.position.z = -5;
                    group.add( mesh );
                }  
                if(layer1topper!=0){
                    var geometry = new THREE.CubeGeometry( 50, 50, 1);
                    var material = new THREE.MeshPhongMaterial( { map: THREE.ImageUtils.loadTexture(toppertexture1),transparent: true } );
                    mesh = new THREE.Mesh(geometry, material );
                    mesh.position.x = -5;
                    mesh.position.y = 30;
                    mesh.position.z = -5;
                    group.add( mesh );
                } 
                   if(decoration1stlayermidmid!=0){
                    var geometry = new THREE.CubeGeometry( 10, 10, 1);
                    var material = new THREE.MeshPhongMaterial( { map: THREE.ImageUtils.loadTexture(decoration1stlayermidmidtexutre),transparent: true } );
                    mesh = new THREE.Mesh(geometry, material );
                    mesh.position.x = -5;
                    mesh.position.y = 0;
                    mesh.position.z = 70.5;
                    group.add( mesh );
                    var geometry = new THREE.CubeGeometry( 1, 10, 10);
                    var material = new THREE.MeshPhongMaterial( { map: THREE.ImageUtils.loadTexture(decoration1stlayermidmidtexutre),transparent: true } );
                    mesh = new THREE.Mesh(geometry, material );
                    mesh.position.x = 70.8;
                    mesh.position.y = 0;
                    mesh.position.z = -5;
                    group.add( mesh );
                    var geometry = new THREE.CubeGeometry( 1, 10, 10);
                    var material = new THREE.MeshPhongMaterial( { map: THREE.ImageUtils.loadTexture(decoration1stlayermidmidtexutre),transparent: true } );
                    mesh = new THREE.Mesh(geometry, material );
                    mesh.position.x = -80.8;
                    mesh.position.y = 0;
                    mesh.position.z = -5;
                    group.add( mesh );
                    var geometry = new THREE.CubeGeometry( 10, 10, 1);
                    var material = new THREE.MeshPhongMaterial( { map: THREE.ImageUtils.loadTexture(decoration1stlayermidmidtexutre),transparent: true } );
                    mesh = new THREE.Mesh(geometry, material );
                    mesh.position.x = -5;
                    mesh.position.y = 0;
                    mesh.position.z = -80.8;
                    group.add( mesh );
                }    
   




                }


                // Heart
/*
                heartShape.moveTo( x + 25, y + 25 );
                heartShape.bezierCurveTo( x + 25, y + 25, x + 20, y, x, y );
                heartShape.bezierCurveTo( x - 30, y, x - 30, y + 35,x - 30,y + 35 );
                heartShape.bezierCurveTo( x - 30, y + 55, x - 10, y + 77, x + 25, y + 95 );
                heartShape.bezierCurveTo( x + 60, y + 77, x + 80, y + 55, x + 80, y + 35 );
                heartShape.bezierCurveTo( x + 80, y + 35, x + 80, y, x + 50, y );
                heartShape.bezierCurveTo( x + 35, y, x + 25, y + 25, x + 25, y + 25 );*/

                var x = 0, y = 0;
                //heart
                var heartShape = new THREE.Shape(); // From http://blog.burlock.org/html5/130-paths
                heartShape.moveTo( x + 25, y + 25 );
                heartShape.bezierCurveTo( x + 25, y + 25, x + 20, y, x, y );
                heartShape.bezierCurveTo( x - 30, y, x - 30, y + 35,x - 30,y + 35 );
                heartShape.bezierCurveTo( x - 30, y + 55, x - 10, y + 77, x + 25, y + 95 );
                heartShape.bezierCurveTo( x + 60, y + 77, x + 80, y + 55, x + 80, y + 35 );
                heartShape.bezierCurveTo( x + 80, y + 35, x + 80, y, x + 50, y );
                heartShape.bezierCurveTo( x + 35, y, x + 25, y + 25, x + 25, y + 25 );
                var extrudeSettingsheart = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 1 };

                //cirlce
                var circleRadius = 80;
                var circleShape = new THREE.Shape();
                circleShape.moveTo( 0, circleRadius );
                circleShape.quadraticCurveTo( circleRadius, circleRadius, circleRadius, 0 );
                circleShape.quadraticCurveTo( circleRadius, -circleRadius, 0, -circleRadius );
                circleShape.quadraticCurveTo( -circleRadius, -circleRadius, -circleRadius, 0 );
                circleShape.quadraticCurveTo( -circleRadius, circleRadius, 0, circleRadius );
                var extrudeSettingsCircleL = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 10 };

                var circleRadiusmid = 60;
                var circleShapemid = new THREE.Shape();
                circleShapemid.moveTo( 0, circleRadiusmid );
                circleShapemid.quadraticCurveTo( circleRadiusmid, circleRadiusmid, circleRadiusmid, 0 );
                circleShapemid.quadraticCurveTo( circleRadiusmid, -circleRadiusmid, 0, -circleRadiusmid );
                circleShapemid.quadraticCurveTo( -circleRadiusmid, -circleRadiusmid, -circleRadiusmid, 0 );
                circleShapemid.quadraticCurveTo( -circleRadiusmid, circleRadiusmid, 0, circleRadiusmid );
                var extrudeSettingsCircleM = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 8 };

                 var circleRadiusS = 40;
                var circleShapeS = new THREE.Shape();
                circleShapeS.moveTo( 0, circleRadiusS );
                circleShapeS.quadraticCurveTo( circleRadiusS, circleRadiusS, circleRadiusS, 0 );
                circleShapeS.quadraticCurveTo( circleRadiusS, -circleRadiusS, 0, -circleRadiusS );
                circleShapeS.quadraticCurveTo( -circleRadiusS, -circleRadiusS, -circleRadiusS, 0 );
                circleShapeS.quadraticCurveTo( -circleRadiusS, circleRadiusS, 0, circleRadiusS );
                var extrudeSettingsCircleS = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 8 };
                //border circle
                var circleRadiuslayer1BorderLarge = 81;
                var circleShapelayer1BorderLarge = new THREE.Shape();
                circleShapelayer1BorderLarge.moveTo( 0, circleRadiuslayer1BorderLarge );
                circleShapelayer1BorderLarge.quadraticCurveTo( circleRadiuslayer1BorderLarge, circleRadiuslayer1BorderLarge, circleRadiuslayer1BorderLarge, 0 );
                circleShapelayer1BorderLarge.quadraticCurveTo( circleRadiuslayer1BorderLarge, -circleRadiuslayer1BorderLarge, 0, -circleRadiuslayer1BorderLarge );
                circleShapelayer1BorderLarge.quadraticCurveTo( -circleRadiuslayer1BorderLarge, -circleRadiuslayer1BorderLarge, -circleRadiuslayer1BorderLarge, 0 );
                circleShapelayer1BorderLarge.quadraticCurveTo( -circleRadiuslayer1BorderLarge, circleRadiuslayer1BorderLarge, 0, circleRadiuslayer1BorderLarge );
                var extrudeSettingsCircleLlayer1BorderLarge = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 1 };

                var circleRadiuslayer2BorderMid = 61;
                var circleShapelayer2BorderMid = new THREE.Shape();
                circleShapelayer2BorderMid.moveTo( 0, circleRadiuslayer2BorderMid );
                circleShapelayer2BorderMid.quadraticCurveTo( circleRadiuslayer2BorderMid, circleRadiuslayer2BorderMid, circleRadiuslayer2BorderMid, 0 );
                circleShapelayer2BorderMid.quadraticCurveTo( circleRadiuslayer2BorderMid, -circleRadiuslayer2BorderMid, 0, -circleRadiuslayer2BorderMid );
                circleShapelayer2BorderMid.quadraticCurveTo( -circleRadiuslayer2BorderMid, -circleRadiuslayer2BorderMid, -circleRadiuslayer2BorderMid, 0 );
                circleShapelayer2BorderMid.quadraticCurveTo( -circleRadiuslayer2BorderMid, circleRadiuslayer2BorderMid, 0, circleRadiuslayer2BorderMid );
                var extrudeSettingsCircleLlayer2BorderMid = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 1 };

                var circleRadiuslayer3BorderSmall = 41;
                var circleShapelayer3BorderSmall = new THREE.Shape();
                circleShapelayer3BorderSmall.moveTo( 0, circleRadiuslayer3BorderSmall );
                circleShapelayer3BorderSmall.quadraticCurveTo( circleRadiuslayer3BorderSmall, circleRadiuslayer3BorderSmall, circleRadiuslayer3BorderSmall, 0 );
                circleShapelayer3BorderSmall.quadraticCurveTo( circleRadiuslayer3BorderSmall, -circleRadiuslayer3BorderSmall, 0, -circleRadiuslayer3BorderSmall );
                circleShapelayer3BorderSmall.quadraticCurveTo( -circleRadiuslayer3BorderSmall, -circleRadiuslayer3BorderSmall, -circleRadiuslayer3BorderSmall, 0 );
                circleShapelayer3BorderSmall.quadraticCurveTo( -circleRadiuslayer3BorderSmall, circleRadiuslayer3BorderSmall, 0, circleRadiuslayer3BorderSmall );
                var extrudeSettingsCircleLlayer3BorderSmall = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 1 };




                    //Rounded rectanglesmall
                    var roundedRectShapesmall = new THREE.Shape();

                ( function roundedRect( ctx, x, y, width, height, radius ){

                    ctx.moveTo( x, y + radius );
                    ctx.lineTo( x, y + height - radius );
                    ctx.quadraticCurveTo( x, y + height, x + radius, y + height );
                    ctx.lineTo( x + width - radius, y + height) ;
                    ctx.quadraticCurveTo( x + width, y + height, x + width, y + height - radius );
                    ctx.lineTo( x + width, y + radius );
                    ctx.quadraticCurveTo( x + width, y, x + width - radius, y );
                    ctx.lineTo( x + radius, y );
                    ctx.quadraticCurveTo( x, y, x, y + radius );

                } )( roundedRectShapesmall, 0, 0, 80, 80, 10 );

                var extrudeSettingssmall = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 8 };
                    


                //Rounded rectanglemid
                var roundedRectShapemid = new THREE.Shape();

                ( function roundedRect( ctx, x, y, width, height, radius ){

                    ctx.moveTo( x, y + radius );
                    ctx.lineTo( x, y + height - radius );
                    ctx.quadraticCurveTo( x, y + height, x + radius, y + height );
                    ctx.lineTo( x + width - radius, y + height) ;
                    ctx.quadraticCurveTo( x + width, y + height, x + width, y + height - radius );
                    ctx.lineTo( x + width, y + radius );
                    ctx.quadraticCurveTo( x + width, y, x + width - radius, y );
                    ctx.lineTo( x + radius, y );
                    ctx.quadraticCurveTo( x, y, x, y + radius );

                } )( roundedRectShapemid, 0, 0, 100, 100, 10 );

                var extrudeSettingsmid = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 8 };
                    
    

                // Rounded rectangle Large

                var roundedRectShape = new THREE.Shape();

                ( function roundedRect( ctx, x, y, width, height, radius ){

                    ctx.moveTo( x, y + radius );
                    ctx.lineTo( x, y + height - radius );
                    ctx.quadraticCurveTo( x, y + height, x + radius, y + height );
                    ctx.lineTo( x + width - radius, y + height) ;
                    ctx.quadraticCurveTo( x + width, y + height, x + width, y + height - radius );
                    ctx.lineTo( x + width, y + radius );
                    ctx.quadraticCurveTo( x + width, y, x + width - radius, y );
                    ctx.lineTo( x + radius, y );
                    ctx.quadraticCurveTo( x, y, x, y + radius );

                } )( roundedRectShape, 0, 0, 150, 150, 10 );

                var extrudeSettings = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 10 };

            // Rounded rectangle Large border upper

                var roundedRectShapeBorderupper = new THREE.Shape();

                ( function roundedRect( ctx, x, y, width, height, radius ){

                    ctx.moveTo( x, y + radius );
                    ctx.lineTo( x, y + height - radius );
                    ctx.quadraticCurveTo( x, y + height, x + radius, y + height );
                    ctx.lineTo( x + width - radius, y + height) ;
                    ctx.quadraticCurveTo( x + width, y + height, x + width, y + height - radius );
                    ctx.lineTo( x + width, y + radius );
                    ctx.quadraticCurveTo( x + width, y, x + width - radius, y );
                    ctx.lineTo( x + radius, y );
                    ctx.quadraticCurveTo( x, y, x, y + radius );

                } )( roundedRectShapeBorderupper, 0, 0, 152, 152, 10 );
                var extrudeSettingsLargeBorderupper = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 0.9 };
               

                var roundedRectShapeBorderlower = new THREE.Shape();

                ( function roundedRect( ctx, x, y, width, height, radius ){

                    ctx.moveTo( x, y + radius );
                    ctx.lineTo( x, y + height - radius );
                    ctx.quadraticCurveTo( x, y + height, x + radius, y + height );
                    ctx.lineTo( x + width - radius, y + height) ;
                    ctx.quadraticCurveTo( x + width, y + height, x + width, y + height - radius );
                    ctx.lineTo( x + width, y + radius );
                    ctx.quadraticCurveTo( x + width, y, x + width - radius, y );
                    ctx.lineTo( x + radius, y );
                    ctx.quadraticCurveTo( x, y, x, y + radius );

                } )( roundedRectShapeBorderlower, 0, 0, 152, 152, 10 );
                var extrudeSettingsLargeBorderlower = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 0.9 };
               
                var roundedRectShapeBorderlower2 = new THREE.Shape();

                ( function roundedRect( ctx, x, y, width, height, radius ){

                    ctx.moveTo( x, y + radius );
                    ctx.lineTo( x, y + height - radius );
                    ctx.quadraticCurveTo( x, y + height, x + radius, y + height );
                    ctx.lineTo( x + width - radius, y + height) ;
                    ctx.quadraticCurveTo( x + width, y + height, x + width, y + height - radius );
                    ctx.lineTo( x + width, y + radius );
                    ctx.quadraticCurveTo( x + width, y, x + width - radius, y );
                    ctx.lineTo( x + radius, y );
                    ctx.quadraticCurveTo( x, y, x, y + radius );

                } )( roundedRectShapeBorderlower2, 0, 0, 102, 102, 10 );
                var extrudeSettingsLargeBorderlower2 = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 0.9 };
               
                var roundedRectShapeBorderupper2 = new THREE.Shape();

                ( function roundedRect( ctx, x, y, width, height, radius ){

                    ctx.moveTo( x, y + radius );
                    ctx.lineTo( x, y + height - radius );
                    ctx.quadraticCurveTo( x, y + height, x + radius, y + height );
                    ctx.lineTo( x + width - radius, y + height) ;
                    ctx.quadraticCurveTo( x + width, y + height, x + width, y + height - radius );
                    ctx.lineTo( x + width, y + radius );
                    ctx.quadraticCurveTo( x + width, y, x + width - radius, y );
                    ctx.lineTo( x + radius, y );
                    ctx.quadraticCurveTo( x, y, x, y + radius );

                } )( roundedRectShapeBorderupper2, 0, 0, 102, 102, 10 );
                var extrudeSettingsLargeBorderupper2 = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 0.9 };
               

               var roundedRectShapeBorderlower3 = new THREE.Shape();

                ( function roundedRect( ctx, x, y, width, height, radius ){

                    ctx.moveTo( x, y + radius );
                    ctx.lineTo( x, y + height - radius );
                    ctx.quadraticCurveTo( x, y + height, x + radius, y + height );
                    ctx.lineTo( x + width - radius, y + height) ;
                    ctx.quadraticCurveTo( x + width, y + height, x + width, y + height - radius );
                    ctx.lineTo( x + width, y + radius );
                    ctx.quadraticCurveTo( x + width, y, x + width - radius, y );
                    ctx.lineTo( x + radius, y );
                    ctx.quadraticCurveTo( x, y, x, y + radius );

                } )( roundedRectShapeBorderlower3, 0, 0, 82, 82, 10 );
                var extrudeSettingsLargeBorderlower3 = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 0.9 };
               
                var roundedRectShapeBorderupper3 = new THREE.Shape();

                ( function roundedRect( ctx, x, y, width, height, radius ){

                    ctx.moveTo( x, y + radius );
                    ctx.lineTo( x, y + height - radius );
                    ctx.quadraticCurveTo( x, y + height, x + radius, y + height );
                    ctx.lineTo( x + width - radius, y + height) ;
                    ctx.quadraticCurveTo( x + width, y + height, x + width, y + height - radius );
                    ctx.lineTo( x + width, y + radius );
                    ctx.quadraticCurveTo( x + width, y, x + width - radius, y );
                    ctx.lineTo( x + radius, y );
                    ctx.quadraticCurveTo( x, y, x, y + radius );

                } )( roundedRectShapeBorderupper3, 0, 0, 82, 82, 10 );
                var extrudeSettingsLargeBorderupper3 = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 0.9 };
               
                










                 //platter
                 var plater = new THREE.Shape();

                ( function roundedRect( ctx, x, y, width, height, radius ){

                    ctx.moveTo( x, y + radius );
                    ctx.lineTo( x, y + height - radius );
                    ctx.quadraticCurveTo( x, y + height, x + radius, y + height );
                    ctx.lineTo( x + width - radius, y + height) ;
                    ctx.quadraticCurveTo( x + width, y + height, x + width, y + height - radius );
                    ctx.lineTo( x + width, y + radius );
                    ctx.quadraticCurveTo( x + width, y, x + width - radius, y );
                    ctx.lineTo( x + radius, y );
                    ctx.quadraticCurveTo( x, y, x, y + radius );

                } )( plater, 0, 0, 190, 190, 10 );
                 var extrudeSettingsplater = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 0.2 };
              
            

                    /*color for layers*/
                    var colorlayer1 = document.getElementById("colorColorLayer1").value;
                    var colorlayer2 = document.getElementById("colorColorLayer2").value;
                    var colorlayer3 = document.getElementById("colorColorLayer3").value;
               
                    /*layers*/
                    var layer1 = document.getElementById("layer1").value;
                    var layer2 = document.getElementById("layer2").value;
                    var layer3 = document.getElementById("layer3").value;

                    /*border*/
                    var borderlayer1upper = document.getElementById("borderlayer1upper").value;
                    var borderlayer1lower = document.getElementById("borderlayer1lower").value;
                    var borderlayer2upper = document.getElementById("borderlayer2upper").value;
                    var borderlayer2lower = document.getElementById("borderlayer2lower").value;
                    var borderlayer3upper = document.getElementById("borderlayer3upper").value;
                    var borderlayer3lower = document.getElementById("borderlayer3lower").value;
                    var locationtext = 'img/upload/layers/';
                                    //darkwhite:#FFFF99 brown:0x804000


                    //platter
                    //plater
                        var texture = THREE.ImageUtils.loadTexture('textures/platercolor.png');
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set(1,1);
                        var type='Plater';
                        addShape(type,plater, extrudeSettingsplater,texture,0xFFFFFF,-100, -20, 90, 300, 0, 0, 1 );
                                
                                //addShape( shape, extrudeSettings,texture,         color,  x,   y, z, rx, ry, rz,s )   
                    //FIRST LAYER
                        if(layer1==1)//large
                    {   var texture = THREE.ImageUtils.loadTexture('img/upload/layers/blank.png');
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set(0.007,0.007);
                        var type='Layer';
                            //roundREC
                        addShape(type, roundedRectShape, extrudeSettings,texture,  colorlayer1,-80,  -5, 70, 300, 0, 0, 1 );

                    //plater
                        var texture = THREE.ImageUtils.loadTexture('textures/platercolor.png');
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set(1,1);
                        var type='Plater';
                        addShape(type,plater, extrudeSettingsplater,texture,0xFFFFFF,-100, -20, 90, 300, 0, 0, 1 );
                    //border
                      
                      //upper
                      if(borderlayer1upper!=0){
                        var borderlayer1uppertexture = locationtext.concat(borderlayer1upper);
                        var texture = THREE.ImageUtils.loadTexture(borderlayer1uppertexture);
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set(0.007,0.007);
                      /*  texture.offset.set(0.007,0.007);*/
                        texture.flipY = true;
                        var type='Border';
                        addShape(type,roundedRectShapeBorderupper, extrudeSettingsLargeBorderupper,texture,0xFFFFFF,-81,  4, 71, 300, 0, 0, 1 );
                      }
                    //lower
                       if(borderlayer1lower!=0){
                        var borderlayer1lowertexture = locationtext.concat(borderlayer1lower);
                        var texture = THREE.ImageUtils.loadTexture(borderlayer1lowertexture);
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set(0.007,0.007);
                        var type='Border';
                        addShape(type,roundedRectShapeBorderlower, extrudeSettingsLargeBorderlower,texture,0xFFFFFF,-81,  -15, 71, 300, 0, 0, 1 );
                      }

                    }
                        else if(layer1==2)
                   {   
                         

                        var texture = THREE.ImageUtils.loadTexture('textures/blank.png');
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set( 0.007, 0.007 );
                        var type='Layer';
                            //CIRCLE
                        addShape(type, circleShape, extrudeSettingsCircleL,texture, colorlayer1,  -5,  -5, -5, 300, 0, 30, 1 );

                       if(borderlayer1upper!=0){
                        var borderlayer1uppertexture = locationtext.concat(borderlayer1upper);
                        var texture = THREE.ImageUtils.loadTexture(borderlayer1uppertexture);
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set(0.009,0.009);

                        var type='Border';
                        addShape(type,circleShapelayer1BorderLarge, extrudeSettingsCircleLlayer1BorderLarge,texture,0xFFFFFF,-5,  3, -5, 300, 0, 30, 1 );
                      }
                       if(borderlayer1lower!=0){
                        var borderlayer1lowertexture = locationtext.concat(borderlayer1lower);
                        var texture = THREE.ImageUtils.loadTexture(borderlayer1lowertexture);
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set(0.009,0.009);
                        var type='Border';
                        addShape(type,circleShapelayer1BorderLarge, extrudeSettingsCircleLlayer1BorderLarge,texture,0xFFFFFF,-5,  -17, -5, 300, 0, 30, 1 );
                      }

                   }else{}

                          if(layer2==1)//Mid
                    {     var texture = THREE.ImageUtils.loadTexture('textures/blank.png');
                          texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                          texture.repeat.set( 0.007, 0.007 );   
                          var type='Layer';
                          addShape(type, roundedRectShapemid,extrudeSettingsmid,texture, colorlayer2,-55,  20, 45, 300, 0, 0, 1 );
                    
                          if(borderlayer2lower!=0){
                        var borderlayer2lowertexture = locationtext.concat(borderlayer2lower);
                        var texture = THREE.ImageUtils.loadTexture(borderlayer2lowertexture);
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set(0.007,0.007);
                        var type='Border';
                        addShape(type,roundedRectShapeBorderlower2, extrudeSettingsLargeBorderlower2,texture,0xFFFFFF,-56,  10, 46, 300, 0, 0, 1 );
                      }

                          if(borderlayer2upper!=0){
                        var borderlayer2uppertexture = locationtext.concat(borderlayer2upper);
                        var texture = THREE.ImageUtils.loadTexture(borderlayer2uppertexture);
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set(0.007,0.007);
                        var type='Border';
                        addShape(type,roundedRectShapeBorderupper2, extrudeSettingsLargeBorderupper2,texture,0xFFFFFF,-56,  26.5, 46, 300, 0, 0, 1 );
                      }

                    }
                        else if(layer2==2)
                    {    var texture = THREE.ImageUtils.loadTexture('textures/blank.png');
                         texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                         texture.repeat.set( 0.007, 0.007 );
                         var type='Layer';
                         addShape(type, circleShapemid, extrudeSettingsCircleM,texture, colorlayer2,   -5,  20, -5, 300, 0, 30, 1 );
                    

                       if(borderlayer2upper!=0){
                        var borderlayer2uppertexture = locationtext.concat(borderlayer2upper);
                        var texture = THREE.ImageUtils.loadTexture(borderlayer2uppertexture);
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set(0.007,0.007);
                        var type='Border';
                        addShape(type,circleShapelayer2BorderMid, extrudeSettingsCircleLlayer2BorderMid,texture,0xFFFFFF,-5,  27, -5, 300, 0, 30, 1 );
                      }
                       if(borderlayer2lower!=0){
                        var borderlayer2lowertexture = locationtext.concat(borderlayer2lower);
                        var texture = THREE.ImageUtils.loadTexture(borderlayer2lowertexture);
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set(0.007,0.007);
                        var type='Border';
                        addShape(type,circleShapelayer2BorderMid, extrudeSettingsCircleLlayer2BorderMid,texture,0xFFFFFF,-5,  10, -5, 300, 0, 30, 1 );
                      }


                    }else{}
                    

                          if(layer3==1)//smalL
                    {   var texture = THREE.ImageUtils.loadTexture('textures/blank.png');
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set( 0.007, 0.007 );
                        var type='Layer';
                        addShape(type, roundedRectShapesmall,extrudeSettingssmall,texture, colorlayer3,-45,  43, 35, 300, 0, 0, 1 );
                    

                        if(borderlayer3lower!=0){
                        var borderlayer3lowertexture = locationtext.concat(borderlayer3lower);
                        var texture = THREE.ImageUtils.loadTexture(borderlayer3lowertexture);
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set(0.009,0.009);
                        var type='Border';
                        addShape(type,roundedRectShapeBorderlower3, extrudeSettingsLargeBorderlower3,texture,0xFFFFFF,-46,  33, 36, 300, 0, 0, 1 );
                      }

                        if(borderlayer3upper!=0){
                        var borderlayer3uppertexture = locationtext.concat(borderlayer3upper);
                        var texture = THREE.ImageUtils.loadTexture(borderlayer3uppertexture);
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set(0.009,0.009);
                        var type='Border';
                        addShape(type,roundedRectShapeBorderupper3, extrudeSettingsLargeBorderupper3,texture,0xFFFFFF,-46,  50, 36, 300, 0, 0, 1 );
                      }


                    } else if(layer3==2)
                    {  var texture = THREE.ImageUtils.loadTexture('textures/blank.png');
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set( 0.007, 0.007 );
                        var type='Layer'; 
                        addShape(type,circleShapeS, extrudeSettingsCircleS,texture, colorlayer3,  -5,  40, -5, 300, 0, 30, 1 );
                    

                         if(borderlayer3upper!=0){
                        var borderlayer3uppertexture = locationtext.concat(borderlayer3upper);
                        var texture = THREE.ImageUtils.loadTexture(borderlayer3uppertexture);
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set(0.007,0.007);
                        var type='Border';
                        addShape(type,circleShapelayer3BorderSmall, extrudeSettingsCircleLlayer3BorderSmall,texture,0xFFFFFF,-5,  47, -5, 300, 0, 30, 1 );
                      }
                       if(borderlayer3lower!=0){
                        var borderlayer3lowertexture = locationtext.concat(borderlayer3lower);
                        var texture = THREE.ImageUtils.loadTexture(borderlayer3lowertexture);
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set(0.007,0.007);
                        var type='Border';
                        addShape(type,circleShapelayer3BorderSmall, extrudeSettingsCircleLlayer3BorderSmall,texture,0xFFFFFF,-5,  33, -5, 300, 0, 30, 1 );
                      }

                    }else{}
                                    
                        

                renderer = new THREE.WebGLRenderer( {antialias: true, preserveDrawingBuffer: true} );
                renderer.setClearColor( 0xf0f0f0 );
                renderer.setPixelRatio( window.devicePixelRatio );
                renderer.setSize( window.innerWidth, window.innerHeight );
                container.appendChild( renderer.domElement );

                stats = new Stats();
                stats.domElement.style.position = 'absolute';
                stats.domElement.style.top = '960px';
                container.appendChild( stats.domElement );

                document.addEventListener( 'mousedown', onDocumentMouseDown, false );
                document.addEventListener( 'touchstart', onDocumentTouchStart, false );
                document.addEventListener( 'touchmove', onDocumentTouchMove, false );

                //

                window.addEventListener( 'resize', onWindowResize, false );

            }

            function onWindowResize() {

                windowHalfX = window.innerWidth / 2;
                windowHalfY = window.innerHeight / 2;

                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();

                renderer.setSize( window.innerWidth, window.innerHeight );

            }

            //ako gi comment ky d mo dagan ang dropdownbox

            function onDocumentMouseDown( event ) {
                
                //event.preventDefault(); 
                document.addEventListener( 'mousemove', onDocumentMouseMove, false );
                document.addEventListener( 'mouseup', onDocumentMouseUp, false );
                document.addEventListener( 'mouseout', onDocumentMouseOut, false );

                mouseXOnMouseDown = event.clientX - windowHalfX;
                targetRotationOnMouseDown = targetRotation;

            }

            function onDocumentMouseMove( event ) {

                mouseX = event.clientX - windowHalfX;

                targetRotation = targetRotationOnMouseDown + ( mouseX - mouseXOnMouseDown ) * 0.02;

            }

            function onDocumentMouseUp( event ) {

                document.removeEventListener( 'mousemove', onDocumentMouseMove, false );
                document.removeEventListener( 'mouseup', onDocumentMouseUp, false );
                document.removeEventListener( 'mouseout', onDocumentMouseOut, false );

            }

            function onDocumentMouseOut( event ) {

                document.removeEventListener( 'mousemove', onDocumentMouseMove, false );
                document.removeEventListener( 'mouseup', onDocumentMouseUp, false );
                document.removeEventListener( 'mouseout', onDocumentMouseOut, false );

            }

            function onDocumentTouchStart( event ) {

                if ( event.touches.length == 1 ) {

                    event.preventDefault();

                    mouseXOnMouseDown = event.touches[ 0 ].pageX - windowHalfX;
                    targetRotationOnMouseDown = targetRotation;

                }

            }

            function onDocumentTouchMove( event ) {

                if ( event.touches.length == 1 ) {

                    event.preventDefault();

                    mouseX = event.touches[ 0 ].pageX - windowHalfX;
                    targetRotation = targetRotationOnMouseDown + ( mouseX - mouseXOnMouseDown ) * 0.05;

                }

            }

            //

            function animate() {

                requestAnimationFrame( animate );

                render();
                stats.update();

            }

            function render() {

                group.rotation.y += ( targetRotation - group.rotation.y ) * 0.05;
                renderer.render( scene, camera );

            }
function printScreen() {
                var strMime = "image/png",
                    imgData = renderer.domElement.toDataURL(strMime);
                
                
                var cake_name           = $("#cake_name").val(),
                    cake_price          = $("#cake_price").val(),
                    cake_category       = $("#cake_category").val(),
                    cake_description    = $("#cake_description").val();
                    seller    = $("#Sellers").val();
                     cakeInfoAction    = $("#cakeInfoAction").val();

                     alert(cake_category);
                $.ajax({
                    url: '/savePrintscreen',
                    type: 'POST',
                    data: {'cake_name':cake_name,
                            'cake_price':cake_price,
                            'cake_category':cake_category,
                            'cake_description':cake_description,
                            'image':imgData,
                            'seller':seller,
                            'cakeInfoAction':cakeInfoAction,
                    },
                    'success': function(data) {
                     window.location.replace("/myaccount");
                    }

                });
                return false;
            }
           function DeleteLayer(data)
            {
           
            var textout;
            if(data=='layer1')
            {textout="If you delete the 1st Layer it would affect/delete all the things youve done"}
           if(data=='layer2')
            {textout="If you delete the 2nd Layer it would affect/delete all the things youve done in layer's 2 & 3"}
           if(data=='layer3')
             {textout="If you delete the 2nd Layer it would affect/delete all the things youve done in layer 3"}


          swal({
            title: "Are you sure?",
            text: textout,
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Yes, delete it!',
            closeOnConfirm: false
          },
          function(){
            $.ajax({
                    url: '/deleteLayer',
                    type: 'POST',
                    data: {data:data,
                    },
                    'success': function(data) {
                    location.reload();
                    }

                });
            swal("Deleted!", "Your imaginary file has been deleted!", "success");
          });
           
            }
             
           
</script>
     
                
<!-- script para querylayerdragdrop -->
<script>


/*$(function() {
  $("#ChooseLayer").on("change",function() {
     var getit = $("#ChooseLayer").val();
     document.getElementsByName('ChooseLayer')[0].value = getit;
    alert($("#ChooseLayer").val());

    {{}}
      }); 
    }
    }
});*/
    </script>

<?php is_array($layers = array('choosebox','layer1', 'layer2', 'layer3','topper1','topper2','topper3','borderlayer1lower','borderlayer1upper','borderlayer2lower','borderlayer2upper','borderlayer3upper','borderlayer3lower','decoration1stlayermidmid')); 
$boolfordesign=0;
if($passFindLayer!='BaseLayer'){//sa menu , kung  dli equal og baselayer ky dli mo gawas tong box2 nga pinamay nga design
$boolfordesign=+1;//bool nga +1 para if baselayer ky mo epekto ang design nga pamay2 
}
?>
 <input required  type = "text" id ="boolfordesign" name = "boolfordesign" hidden=true value="{{$boolfordesign}}" />  

<!-- designpamay2 box2 layer-->
    <script>
/*var boolfordesign = document.getElementById("boolfordesign").value;
var layer1 = document.getElementById("layer1").value;
var layer2 = document.getElementById("layer2").value;
var layer3 = document.getElementById("layer3").value;

if(boolfordesign==1){
    if(layer1==1||layer1==2){
    var div = document.createElement("div");
    div.className = "layer1fortopper";
    document.body.appendChild(div);
    }
    if(layer2==1||layer2==2)
    {
    var div = document.createElement("div");
    div.className = "layer2fortopper";
    document.body.appendChild(div);
    }
    if(layer3==1||layer3==2)
    {
    var div = document.createElement("div");
    div.className = "layer3fortopper";
    document.body.appendChild(div);
    }
}
*/

</script>


 @foreach ($layers as $layer) 

<!-- boxes -->
@if($layer=='choosebox')
  <div class="box" id="{{$layer}}"> 
 
 @elseif($passFindLayer=='BaseLayer')
    
         @if($layer=='layer1')
          <div class="box" id="{{$layer}}">
                @if($findCaketogenerateModel->layer1>0)
                <button type="button" class="btn btn-labeled btn-danger" id="{{$layer}}" style="width:20px; height:20px;" onclick="DeleteLayer('layer1')";>
                <i class="glyphicon glyphicon-remove" style="margin-left:-7px; top:-3px;"></i></button>
                @endif
        @elseif($layer=='layer2'&&$findCaketogenerateModel->layer1>0)
                @if($findCaketogenerateModel->layer1topper<=0)
                <div class="box" id="{{$layer}}">
                @if($findCaketogenerateModel->layer2>0)
                <button type="button" class="btn btn-labeled btn-danger" id="{{$layer}}" style="width:20px; height:20px;" onclick="DeleteLayer('layer2')";>
                <i class="glyphicon glyphicon-remove" style="margin-left:-7px; top:-3px;"></i></button>
                @endif
                @endif
        @elseif($layer=='layer3'&&$findCaketogenerateModel->layer2>0)
                 @if($findCaketogenerateModel->layer2topper<=0)
                <div class="box" id="{{$layer}}">
                 @if($findCaketogenerateModel->layer3>0)
                <button type="button" class="btn btn-labeled btn-danger" id="{{$layer}}" style="width:20px; height:20px;" onclick="DeleteLayer('layer3')";>
                <i class="glyphicon glyphicon-remove" style="margin-left:-7px; top:-3px;"></i></button>
                @endif
                @endif
          @endif
  
       @elseif($passFindLayer=='Toppers')
    
         @if($layer=='topper1'&&$findCaketogenerateModel->layer2==0&&$findCaketogenerateModel->layer2==0&&$findCaketogenerateModel->layer1>0)
          <div class="box" id="{{$layer}}">
                @if($findCaketogenerateModel->layer1topper>0)
                <button type="button" class="btn btn-labeled btn-danger" id="{{$layer}}" style="width:20px; height:20px;" onclick="DeleteLayer('layer1topper')";>
                <i class="glyphicon glyphicon-remove" style="margin-left:-7px; top:-3px;"></i></button>
                @endif
        @elseif($layer=='topper2'&&$findCaketogenerateModel->layer2>0&&$findCaketogenerateModel->layer3==0)
          <div class="box" id="{{$layer}}">
                @if($findCaketogenerateModel->layer2topper>0)
                <button type="button" class="btn btn-labeled btn-danger" id="{{$layer}}" style="width:20px; height:20px;" onclick="DeleteLayer('layer2topper')";>
                <i class="glyphicon glyphicon-remove" style="margin-left:-7px; top:-3px;"></i></button>
                @endif
        @elseif($layer=='topper3'&&$findCaketogenerateModel->layer1>0&&$findCaketogenerateModel->layer2>0&&$findCaketogenerateModel->layer3>0)
          <div class="box" id="{{$layer}}">
                @if($findCaketogenerateModel->layer3topper>0)
                <button type="button" class="btn btn-labeled btn-danger" id="{{$layer}}" style="width:20px; height:20px;" onclick="DeleteLayer('layer3topper')";>
                <i class="glyphicon glyphicon-remove" style="margin-left:-7px; top:-3px;"></i></button>
                @endif
          @endif

      @elseif($passFindLayer=='Borders')
       
      @if($layer=='borderlayer1lower')
          @if($findCaketogenerateModel->layer1>0)
              <div class="box" id="{{$layer}}">
               @if($findCaketogenerateModel->borderlayer1lower>0)
              <button type="button" class="btn btn-labeled btn-danger" id="{{$layer}}" style="width:20px; height:20px; top:-20px; position:absolute;" onclick="DeleteLayer('borderlayer1lower')";>
              <i class="glyphicon glyphicon-remove" style="margin-left:-7px; top:-3px;"></i></button>
              @endif
          @endif
      @elseif($layer=='borderlayer1upper')
          @if($findCaketogenerateModel->layer1>0)
              <div class="box" id="{{$layer}}">
               @if($findCaketogenerateModel->borderlayer1upper>0)
              <button type="button" class="btn btn-labeled btn-danger" id="{{$layer}}" style="width:20px; height:20px; top:-40px; position:absolute;" onclick="DeleteLayer('borderlayer1upper')";>
              <i class="glyphicon glyphicon-remove" style="margin-left:-7px; top:-3px;"></i></button>
              @endif
          @endif
      @elseif($layer=='borderlayer2lower')
          @if($findCaketogenerateModel->layer2>0)
              <div class="box" id="{{$layer}}">
              @if($findCaketogenerateModel->borderlayer2lower>0)
              <button type="button" class="btn btn-labeled btn-danger" id="{{$layer}}" style="width:20px; height:20px; top:-20px; left:20px; position:absolute;" onclick="DeleteLayer('borderlayer2lower')";>
              <i class="glyphicon glyphicon-remove" style="margin-left:-7px; top:-3px;"></i></button>
              @endif
          @endif 
      @elseif($layer=='borderlayer2upper')
          @if($findCaketogenerateModel->layer2>0)
              <div class="box" id="{{$layer}}">
               @if($findCaketogenerateModel->borderlayer2upper>0)
              <button type="button" class="btn btn-labeled btn-danger" id="{{$layer}}" style="width:20px; height:20px; top:-40px; left:20px; position:absolute;" onclick="DeleteLayer('borderlayer2upper')";>
              <i class="glyphicon glyphicon-remove" style="margin-left:-7px; top:-3px;"></i></button>
              @endif
          @endif
      @elseif($layer=='borderlayer3lower')
          @if($findCaketogenerateModel->layer3>0)
              <div class="box" id="{{$layer}}">
               @if($findCaketogenerateModel->borderlayer3lower>0)
              <button type="button" class="btn btn-labeled btn-danger" id="{{$layer}}" style="width:20px; height:20px; top:-20px; left:460px; position:absolute;" onclick="DeleteLayer('borderlayer3lower')";>
              <i class="glyphicon glyphicon-remove" style="margin-left:-7px; top:-3px;"></i></button>
              @endif
          @endif
      @elseif($layer=='borderlayer3upper')
          @if($findCaketogenerateModel->layer3>0)
              <div class="box" id="{{$layer}}">
               @if($findCaketogenerateModel->borderlayer3upper>0)
              <button type="button" class="btn btn-labeled btn-danger" id="{{$layer}}" style="width:20px; height:20px;top:-20px;  position:absolute;" onclick="DeleteLayer('borderlayer3upper')";>
              <i class="glyphicon glyphicon-remove" style="margin-left:-7px; top:-3px;"></i></button>
              @endif
          @endif  
      @endif
       @elseif($layer=='decoration1stlayermidmid')
          @if($findCaketogenerateModel->layer1>0)
              <div class="box" id="{{$layer}}">
            
              
              @endif

    
@endif 

 
@if($layer=='choosebox')
<center>
<h4>
{{$findLayers=$passFindLayer}}
</h4>
</center>
@endif
<!-- display -->
{{Helper::Display($layer,$findLayers);}}    
 </div>
@endforeach


 

        
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
                <p>DEVELOPERS: CARULASAN, KIMBERLY JEAN && LAUDE, DAVID</p>
            </div>
        </div>
    </div>
    <!-- /footer -->

    <!-- colorpicker -->

    <!-- js colorpicker -->
    {{ HTML::script('colorpiker/lib/jquery-1.10.2/jquery-1.10.2.min.js') }}
    {{ HTML::script('colorpicker/lib/bootstrap-3.0.3/js/bootstrap.min.js') }}
    {{ HTML::script('colorpicker/lib/bootstrap-colorselector-0.2.0/js/bootstrap-colorselector.js') }}
    {{ HTML::script('colorpicker/lib/google-code-prettify/prettify.js') }}
    {{ HTML::script('scripts/colorpicker.js') }}




  

    </body>


</html>

