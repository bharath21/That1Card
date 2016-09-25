<!DOCTYPE html>
<html>
<head>
	<title>Register Procurement</title>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
		<link rel="stylesheet" href="https://milligram.github.io/css/milligram.min.css">
		<meta name="csrf-token" value="{{ csrf_token() }}">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#procurement_date" ).datepicker();
    $('#TheCode_date_of_sale').datepicker();
  } );
  </script>
</head>
<body>
<br/>
<br/>
<div class="row"> 
	<div class="column column-offset-25">
		<form id="codeform">
			<input placeholder="Date of sale" type="text" id="TheCode_date_of_sale">
			<input placeholder="Retailer Code" type="text" id="TheCode_retailer_code">
			<input placeholder="SKU code" type="text" id="TheCode_SKU_code">
		</form>
	</div>
	<div class="column">
		<br/><br/>
		<button id="codebutton">Find this SKU code</button>
	</div>
</div>
<hr/>
<div class="row">
	<div class="column column-50 column-offset-25">
		<form id="sale_form" method="POST">
		  	{{csrf_field()}}
		    <label for="date_of_sale">Date of Sale: </label>
		    <input type="text" placeholder="dd/mm/yy" id="date_of_sale" name="date_of_sale" readonly>
		    <br/>
		    <label for="retailer_code">Retailer Code: </label>
		    <input type="text" placeholder="Retailer Code" id="retailer_code" name="retailer_code" readonly>
		    <br/>
		    <label for="SKU_code">SKU code: </label>
		    <input type="text" placeholder="SKU Code" id="SKU_code" name="SKU_code" readonly readonly>
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

		$('#codebutton').click(function(){
			//code = $('#TheCode_date_of_sale').val();
			//alert(code);
			$.ajax({
		        url: "{{action('FormController@findSale')}}",
		        type:"POST",
		        data: {"SKU_code" : $('#TheCode_SKU_code').val(),
		        	   "retailer_code" : $('#TheCode_retailer_code').val(),
		        	   "date_of_sale" : $('#TheCode_date_of_sale').val()
		    			},
		        success:function(data){
		          	$('#date_of_sale').val(data['date_of_sale']);
		          	$('#retailer_code').val(data['retailer_code']);
		          	$('#SKU_code').val(data['SKU_code']);
		          	$('#sale_quantity').val(data['sale_quantity']);
		          	$('#sale_price').val(data['sale_price']);
		          	$('#sale_invoice_number').val(data['sale_invoice_number']);
		          	//$('#supplier_card_name').val(data['supplier_card_name']);
		        },
		        error:function(){ 
		            alert("error!");
		        }
	    	});
	
		});

		$('procurement_form').submit(function(e){

		//var postData = $(this).serializeArray();	
		$.ajax({
		        url: "{{action('FormController@registerProcurement')}}",
		        type:"POST",
		        data: postData,
		        success:function(data){
		          	alert('asdas');
		        },
		        error:function(){ 
		            alert("error!");
		        }
	    	});
		$('procurement_form').submit();
		});
	  	
	});
</script>

</html>
