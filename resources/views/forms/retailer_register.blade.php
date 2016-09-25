<!DOCTYPE html>
<html>
<head>
	<title>Register Retailer</title>
	
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
			Register a Retailer
		</h1>
	</div>
</div>
<div class="row">
	<div class="column column-50 column-offset-25">
		<form id="retailer_form" method="POST">
		  	{{csrf_field()}}
		    <label for="retailer_code">retailer Code : </label>
		    <input type="text" placeholder="retailer Code" id="retailer_code" name="retailer_code">
		    <br/>
		    <label for="retailer_name">retailer Name : </label>
		    <input type="text" placeholder="Name" id="retailer_name" name="retailer_name">
		    <br/>
		    <label for="retailer_TINno">retailer TIN.no : </label>
		    <input type="text" placeholder="TIN No." id="retailer_TINno" name="retailer_TINno">
		    <br/>
		    <label for="retailer_CSTno">retailer CST.no : </label>
		    <input type="text" placeholder="CST No." id="retailer_CSTno" name="retailer_CSTno">
		    <br/>
		    <label for="retailer_email">retailer Code : </label>
		    <input type="email" placeholder="Email" id="retailer_email" name="retailer_email">
		    <br/>
		    <label for="retailer_phone">retailer Phone No. : </label>
		    <input type="number" placeholder="Phone" id="retailer_phone" name="retailer_phone">
		    <br/>
		    <label for="retailer_address">retailer Address : </label>
		    <input type="text" placeholder="Address" id="retailer_address" name="retailer_address">
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

		$('retailer_form').submit(function(e){

		//var postData = $(this).serializeArray();	
		$.ajax({
		        url: "{{action('FormController@registerRetailer')}}",
		        type:"POST",
		        data: postData,
		        success:function(data){
		          	alert('success!');
		        },
		        error:function(){ 
		            alert("error!");
		        }
	    	});
		$('retailer_form').submit();
		});
	  	
	});
</script>

</html>