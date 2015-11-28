$(document).ready(function() {
	$('.box div').draggable({
		helper: 'clone'		
	});
	
	$('.box').droppable({
		//tolerance: 'touch',
		/*overlap: 0.75,*/
		drop: function(event,ui) {


			//tolerance
			var findLayer = document.getElementById("findLayer").value;
			 if(findLayer=='Borders')
			 	{overlap: 0.99;}
			 else
			 	{overlap: 0.75;}

			var id = $(ui.draggable).attr('id');
			var cake = $(ui.draggable).html();
			var box = $(this).attr('id');
		
			 location.reload();
			$.ajax({
				url: '/addItemCakeModel',
				type: 'GET',
				data: {
					'id' : id,
					'box' : box
				},
				 success:function(data){
                    //alert('success!');
                    //location.reload();
                }

			

			});
		}
	});


});



	