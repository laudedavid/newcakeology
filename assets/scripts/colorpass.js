  $(document).ready(function() {  
  $( ".colorselector_1" ).change(function() {
   var colorit = document.getElementById("colorselector_1").value;
   //alert(colorit);
   $.ajax({    
        url: '/addItemColor',
        type: 'GET',
        data: {'colorit':colorit},
        success:function(data){
            //alert('success!')
            location.reload();
        	},
        error:function(data){
            console.log(data);
            alert('error');        
        }                      
    }); });
  });