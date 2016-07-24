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
  } );
  </script>
</head>
<body>
<br/>
<div class="row"> 
	<div class="column column-offset-25">
		<form id="codeform">
			<input type="text" id="TheCode">
		</form>
	</div>
	<div class="column">
		<button id="codebutton">Find this SKU code</button>
	</div>
</div>
<hr/>
<div class="row">
	<div class="column column-50 column-offset-25">
		<form id="procurement_form"  method="POST" enctype='multipart/form-data'>
		  	{{csrf_field()}}
		  	<label for="procurement_date">Procurement Date : </label>
		    <input type="text" placeholder="dd-mm-yyyy" id="procurement_date" name="procurement_date">
		    <br/>
		    <label for="manufacturer_code">Manufacturer Code : </label>
		    <input type="text" placeholder="Manufacturer Code" id="manufacturer_code" name="manufacturer_code">
		    <br/>
			<label for="SKU_code">SKU Code : </label>
		    <input type="text" placeholder="SKU Code" id="SKU_code" name="SKU_code">
		    <br/>
   			<label for="quantity">quantity : </label>
		    <input type="text" placeholder="Quantity" id="quantity" name="quantity">
		    <br/>		    		    
		    <label for="price">Price : </label>
		    <input type="text" placeholder="Price in rupees" id="price" name="price">
		    <br/>
		    <label for="supplier_card_code">Supplier Card Code : </label>
		    <input type="text" placeholder="Supplier Card Code" id="supplier_card_code" name="supplier_card_code">
		    <br/>
		    <label for="supplier_card_name">Supplier Card Name : </label>
		    <input type="text" placeholder="Supplier Card Name" id="supplier_card_name" name="supplier_card_name">
		    <br/>		    		    		    		    		    		    
		    <label for="supplier_card_image">Supplier Card Name : </label>
		    <input type="file" placeholder="Upload image" id="supplier_card_image" name="supplier_card_image">
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
			code = $('#TheCode').val();
			alert(code);
			$.ajax({
		        url: "{{action('FormController@findProcurement')}}",
		        type:"POST",
		        data: {"SKU_code" : code},
		        success:function(data){
		          	$('#procurement_date').val(data['date_of_purchase']);
		          	$('#manufacturer_code').val(data['manufacturer_code']);
		          	$('#SKU_code').val(data['SKU_code']);
		          	$('#quantity').val(data['quantity']);
		          	$('#price').val(data['overall_price']);
		          	$('#supplier_card_code').val(data['supplier_card_code']);
		          	$('#supplier_card_name').val(data['supplier_card_name']);
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