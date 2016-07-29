<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
#card_row{
	display: none;
}
#card_button:hover{
	cursor:pointer;
}
#register_button:hover{
	cursor: pointer;
}
#edit_button:hover{
	cursor: pointer;
}
</style>
<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="jquery.clickBubble.min.js"></script>
	<script type="text/javascript">
		
	</script>
</head>
<body>
 <br/>
 
 <div class="row" style="margin-top: -1%;margin-bottom:-2%;">
 		<div class="column column-50 column-offset-25" style="text-align:center;">
			<img src="header_img.jpg">	
			<br/>
		</div>
 </div>
 <hr/>
<div class="row">
	<div class="column column-30" style="text-align:center;">
		<span id="register_button">
		<img src="add.png" height="50" width="50">
		<h5>Add a record.</h5>
		</span>
		<span id="register_row">
			 <a href='{{action("PagesController@registerManufacturer")}}'>
			 		<button>Manufacturer</button>
			 </a>
			 <a href='{{action("PagesController@registerRetailer")}}'>
			 		<button>Retailer</button>
			 </a>
			 <a href='{{action("PagesController@registerProcurement")}}'>
			 		<button>Procurement</button>
			 </a>
			 <a href='{{action("PagesController@registerSale")}}'>
			 		<button>Sale</button>
			 </a>
		</span>
	</div>
	<br/><br/><br/>
	<div class="column column-30" style="text-align:center;">
		<span id="edit_button">
		<img src="edit.png" height="50" width="50">
		<h5>Edit a record.</h5>
		</span>
		<span id="edit_row">
			<a href='{{action("PagesController@editManufacturer")}}'>
		 		<button>Manufacturer</button>
		 	</a>
		 	<a href='{{action("PagesController@editRetailer")}}'>
		 		<button>Retailer</button>
		 	</a>
		 	<a href='{{action("PagesController@editProcurement")}}'>
		 	<button>Procurement</button>
		 	</a>
		 	<a href='{{action("PagesController@editSale")}}'>
		 	<button>Sale</button>
		 	</a>
		</span>
	</div>
</div>
	<br/><br/><br/>
<div class="row">
	<div class="column column-30" style="text-align:center;">
		<span id="card_button">
			<img src="addcard.png" height="80" width="120" style="margin-bottom:-3%;margin-top:-2%;">
			<h5>Cards</h5>
		</span>
		<span id="card_row">
			 <a href='{{action("PagesController@registerCard")}}'>
			 		<button>Add a card</button>
			 </a>
			 <a href='{{action("PagesController@editCard")}}'>
			 		<button>Remove a card</button>
			 </a>
		</span>
	</div>
	
	<br/><br/><br/>
	
	<div class="column column-30" style="text-align:center;">
			<span id="logout_button">
				<a href="/logout">
				<img src="logout.png" height="50" width="50" style="margin-top:2%;" />
				<br/>
				<h5>Logout.</h5>
				</a>
			</span>
	</div>
</div>
</body>
<script>
	var register_open = 1;
	var edit_open = 1;
	var card_open = 1;
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
	$('#card_button').click(function(){
		if(card_open == 1){
		$('#card_description').css("display","none");
		$('#card_row').slideDown('slow');	
		}
		else{
		$('#card_row').css("display","none");
		$('#card_description').slideDown('slow');
		}
		card_open = card_open*-1;
	});

</script>
</html>