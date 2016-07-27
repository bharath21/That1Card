<!DOCTYPE html>
<html>
<head>
	<title>Register Sale</title>
	
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
			Register a Sale
		</h1>
	</div>
</div>
<div class="row">
	<div class="column column-50 column-offset-25">
		<form id="sale_form" method="POST">
		  	{{csrf_field()}}
		    <label for="date_of_sale">Date of Sale: </label>
		    <input type="text" placeholder="dd/mm/yy" id="date_of_sale" name="date_of_sale">
		    <br/>
		    <label for="retailer_code">Retailer Code: </label>
		    <input type="text" placeholder="Retailer Code" id="retailer_code" name="retailer_code">
		    <br/>
		    <label for="SKU_code">SKU code: </label>
		    <input type="text" placeholder="SKU Code" id="SKU_code" name="SKU_code">
		    <br/>
		    <label for="sale_quantity">Sale Quantity: </label>
		    <input type="text" placeholder="Quantity" id="sale_quantity" name="sale_quantity">
		    <br/>
		    <label for="sale_price">Sale Price: </label>
		    <input type="text" placeholder="Price" id="sale_price" name="sale_price">
		    <br/>
		    <label for="sale_invoice_number">Invoice Number: </label>
		    <input type="text" placeholder="Invoice Number" id="sale_invoice_number" name="sale_invoice_number">
		    <br/>
		    <input class="button-primary" type="submit" value="Register" id="register"> 
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

		$('sale_form').submit(function(e){

		//var postData = $(this).serializeArray();	
		$.ajax({
		        url: "{{action('FormController@registerSale')}}",
		        type:"POST",
		        data: postData,
		        success:function(data){
		          	alert('success!');
		        },
		        error:function(){ 
		            alert("error!");
		        }
	    	});
		$('sale_form').submit();
		});
	  	
	});
</script>

</html>