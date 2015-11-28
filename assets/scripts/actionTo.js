  $(document).ready(function() {  
  $( "#cakeInfoAction" ).change(function() {
  var val = document.getElementById("cakeInfoAction").value;
 
if(val=='Buy')
{
document.getElementById("Sellers1").style.display ='block';}
else{document.getElementById("Sellers1").style.display ='none';}

  /* $.ajax({    
        url: 'actionTo',
        type: 'GET',
        data: {'val':val},
        success:function(data){
            //alert('success!')

        	},
        error:function(data){
            console.log(data);
            alert('error');        
        }                      
    }); */

 });
  });