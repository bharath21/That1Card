<!DOCTYPE html>
<html>
<head>
	<title>Register A Card</title>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
		<link rel="stylesheet" href="https://milligram.github.io/css/milligram.min.css">
		<meta name="csrf-token" value="{{ csrf_token() }}">

</head>
<body>
<br/>
<div class="row">
	<div class="column column-offset-25">
		<h1>
			Register a Card
		</h1>
	</div>
</div>
<div class="row">
	<div class="column column-50 column-offset-25">
		<form id="card_form" method="POST">
		  	{{csrf_field()}}
		    <label for="card_SKU_code">SKU Code : </label>
		    <input type="text" placeholder="SKU code" id="card_SKU_code" name="card_SKU_code">
		    <br/>
		    <label for="card_wholesale_price">Wholesale Price : </label>
		    <input type="text" placeholder="Price" id="card_wholesale_price" name="card_wholesale_price">
		    <br/>
		    <label for="card_retail_price">Retail Price : </label>
		    <input type="text" placeholder="Retail Price" id="card_retail_price" name="card_retail_price">
		    <br/>
		    <label for="card_status">Status : </label>
		    <input type="text" placeholder="A(available) / D(Discontinued)" id="card_status" name="card_status">
		    <br/>
		    <label for="card_in_stock">Cards in Stock : </label>
		    <input type="number" placeholder="Stock Qty" id="card_in_stock" name="card_in_stock">
		    <br/>
		    <label for="card_blocked">Cards Blocked : </label>
		    <input type="number" placeholder="Blocked Qty" id="card_blocked" name="card_blocked" value="0">
		    <br/>
		    <label for="card_MOQ">Minimum Order Quantity : </label>
		    <input type="number" placeholder="Minimum Qty" id="card_MOQ" name="card_MOQ" value="0">
		    <br/>
		    <label for="card_base_price">Card Base Price : </label>
		    <input type="number" placeholder="Price" id="card_base_price" name="card_base_price">
		    <br/>
		    <input class="button-primary" type="submit" value="Regiser" id="register">
		 
		</form>
	</div>
</div>
</body>

<script>
	$(document).ready(function(){
		$.ajaxSetup({
  			headers: {
    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  			}
		});

		$('card_form').submit(function(e){

		//var postData = $(this).serializeArray();	
		$.ajax({
		        url: "{{action('FormController@registerCard')}}",
		        type:"POST",
		        data: postData,
		        success:function(data){
		          	alert('asdas');
		        },
		        error:function(){ 
		            alert("error!");
		        }
	    	});
		$('card_form').submit();
		});
	  	
	});
</script>

</html>