<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
		<link rel="stylesheet" href="https://milligram.github.io/css/milligram.min.css">
<style>
#register_row{
	display: none;
}
#edit_row{
	display: none;
}
#register_button:hover{
	cursor: pointer;
}
#edit_button:hover{
	cursor: pointer;
}
</style>
</head>
<body>
 <br/>
 <div class="row" style="margin-top:-4%;margin-bottom:-5%;">
 		<span style="margin-left:40%;">
			<img src="header_img.jpg">	
		</span>
		<span style="margin-left:30%;margin-top:5%;">
				<b>{{Auth::user()->name}}</b>	
		</span>
		<span style="margin-left:1%;margin-top:5%;">
			<a href="/logout">
				<img src="logout.png" width="15" height="15" />
			</a>	
		</span>
 </div>
 <hr/>
 <div class="row">
		<div class="column" style="margin-left:15%;">
		<div id="register_button">
			<h4 style="margin-left:10%;">
				<img src="add.png" width="50" height="50">	
			</h4>
	
			<div class="row" id="register_description"	>
				<h5>Add a new record.</h5> 
			</div>
		</div>
		<div class="row" id="register_row" style="margin-left:-25%;">
			 
			 	<a href='{{action("PagesController@registerManufacturer")}}'>
			 		<button>Manufacturer</button>
			 	</a>
			 	<a href='{{action("PagesController@registerRetailer")}}'>
			 		<button>Retailer</button>
			 	</a>
			 	<a href='{{action("PagesController@registerProcurement")}}'>
			 		<button>Procurement</button>
			 	</a>
			 
	 	</div>
	 </div>
	 <div class="column" style="margin-left:10%;">
		<div id="edit_button">
			<h4 style="margin-left:10%;">
				<img src="edit.png" width="50" height="50">	
			</h4>
			<div class="row" id="edit_description">
				<h5>Edit an existing record.</h5> 
			</div>
		</div>
		<div class="row" id="edit_row" style="margin-left:-25%;">
			 
			 <a href='{{action("PagesController@editManufacturer")}}'>
		 		<button>Manufacturer</button>
		 	</a>
		 	<a href='{{action("PagesController@editRetailer")}}'>
		 		<button>Retailer</button>
		 	</a>
		 	<a href='{{action("PagesController@editProcurement")}}'>
		 	<button>Procurement</button>
		 	</a>
			 
	 	</div>
	 </div>
 </div>

</body>
<script>
	var register_open = 1;
	var edit_open = 1;
	$('#register_button').click(function(){
		if(register_open == 1){
		$('#register_description').css("display","none");
		$('#register_row').slideDown('slow');	
		}
		else{
		$('#register_row').css("display","none");
		$('#register_description').slideDown('slow');
		}
		register_open = register_open*-1;
	});
	$('#edit_button').click(function(){
		if(edit_open == 1){
		$('#edit_description').css("display","none");
		$('#edit_row').slideDown('slow');	
		}
		else{
		$('#edit_row').css("display","none");
		$('#edit_description').slideDown('slow');
		}
		edit_open = edit_open*-1;
	});
</script>
</html>