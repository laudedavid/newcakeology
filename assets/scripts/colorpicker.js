  $(document).ready(function() {          
                	$('#colorselector_1').colorselector({
          callback : function(value,color) 
          {
            
            $("#colorColor").val(color);
             var layer=1;
             var colorit = document.getElementById("colorselector_1").value;
    			location.reload();
        $.ajax({    
        url: '/addItemColor',
        type: 'GET',
        data: {'colorit':colorit,
    			'layer':layer},                 
    	});
         }



        });
  	$('#colorselector_2').colorselector({
          callback : function(value,color) 
          {
            
           
             var layer=2;
             var colorit = document.getElementById("colorselector_2").value;
   			location.reload();
       $.ajax({    
        url: '/addItemColor',
        type: 'GET',
        data: {'colorit':colorit,
    			'layer':layer},                       
       });

         }



        });
  	  	$('#colorselector_3').colorselector({
          callback : function(value,color) 
          {
            
           
             var layer=3;
             var colorit = document.getElementById("colorselector_3").value;
             location.reload();
   //alert(colorit);
        $.ajax({    
        url: '/addItemColor',
        type: 'GET',
        data: {'colorit':colorit,
    			'layer':layer},
         });

         }
        });



 });
