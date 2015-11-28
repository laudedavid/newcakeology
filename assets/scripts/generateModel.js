$(document).ready(function() {

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
                var locationtext = 'img/upload/layers/';
                var toppertexture3 = locationtext.concat(layer3topper);
                var toppertexture2 = locationtext.concat(layer2topper);
                var toppertexture1 = locationtext.concat(layer1topper);

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
                        addShape(type,roundedRectShapeBorderlower2, extrudeSettingsLargeBorderlower2,texture,0xFFFFFF,-56,  12, 46, 300, 0, 0, 1 );
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
                        texture.repeat.set(0.007,0.007);
                        var type='Border';
                        addShape(type,roundedRectShapeBorderlower3, extrudeSettingsLargeBorderlower3,texture,0xFFFFFF,-46,  33, 36, 300, 0, 0, 1 );
                      }

                        if(borderlayer3upper!=0){
                        var borderlayer3uppertexture = locationtext.concat(borderlayer3upper);
                        var texture = THREE.ImageUtils.loadTexture(borderlayer3uppertexture);
                        texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                        texture.repeat.set(0.007,0.007);
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



                $.ajax({
                    url: '/savePrintscreen',
                    type: 'POST',
                    data: {'cake_name':cake_name,
                            'cake_price':cake_price,
                            'cake_category':cake_category,
                            'cake_description':cake_description,
                            'image':imgData,
                            'seller':seller,
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
             
           

     });