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
		    <input type="text" placeholder="SKU code" id="card_SKU_code" name="card_SKU_code" readonly>
		    <br/>
		    <label for="card_wholesale_price">Wholesale Price : </label>
		    <input type="text" placeholder="Price" id="card_wholesale_price" name="card_wholesale_price">
		    <br/>
		    <label for="card_retail_price">Retail Price : </label>
		    <input type="text" placeholder="Retail Price" id="card_retail_price" name="card_retail_price">
		    <br/>
		    <label for="card_status">Status : </label>
		    <input type="text" placeholder="Status" id="card_status" name="card_status">
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
		$('#codebutton').click(function(){
			//code = $('#TheCode').val();
			alert(code);
			$.ajax({
		        url: "{{action('FormController@findManufacturer')}}",
		        type:"POST",
		        data: {"manufacturer_code" : code},
		        success:function(data){
		          	$('#card_SKU_code').val(data['card_SKU_code']);
		          	$('#card_wholesale_price').val(data['card_wholesale_price']);
		          	$('#card_retail_price').val(data['card_retail_price']);
		          	$('#card_status').val(data['card_status']);
		          	$('#card_in_stock').val(data['card_in_stock']);
		          	$('#card_blocked').val(data['card_blocked']);
		          	$('#card_MOQ').val(data['card_MOQ']);
		          	$('#card_base_price').val(data['card_base_price']);
		        },
		        error:function(){ 
		            alert("error!");
		        }
	    	});
	
		});

		$('#edit').click(function(){
			data = {
				"manufacturer_code" : $('#manufacturer_code').val(),
		        "manufacturer_name" : $('#manufacturer_name').val(),
		        "manufacturer_TINno": $('#manufacturer_TINno').val(),
		        "manufacturer_CSTno": $('#manufacturer_CSTno').val(),
		        "manufacturer_email": $('#manufacturer_email').val(),
		        "manufacturer_phone": $('#manufacturer_phone').val(),
		        "manufacturer_address": $('#manufacturer_address').val()
			}

			$.ajax({
		        url: "{{action('FormController@editManufacturer')}}",
		        type:"POST",
		        data: data,
		        success:function(data){
		          	alert('success');
		        },
		        error:function(){ 
		            alert("error!");
		        }
	    	});			
		});
		
	});
</script>
</html>