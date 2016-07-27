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
			Register a Manufacturer
		</h1>
	</div>
</div>
<div class="row">
	<div class="column column-50 column-offset-25">
		<form id="manufacturer_form" method="POST">
		  	{{csrf_field()}}
		    <label for="manufacturer_code">Manufacturer Code : </label>
		    <input type="text" placeholder="Manufacturer Code" id="manufacturer_code" name="manufacturer_code">
		    <br/>
		    <label for="manufacturer_name">Manufacturer Name : </label>
		    <input type="text" placeholder="Name" id="manufacturer_name" name="manufacturer_name">
		    <br/>
		    <label for="manufacturer_TINno">Manufacturer TIN.no : </label>
		    <input type="text" placeholder="TIN No." id="manufacturer_TINno" name="manufacturer_TINno">
		    <br/>
		    <label for="manufacturer_CSTno">Manufacturer CST.no : </label>
		    <input type="text" placeholder="CST No." id="manufacturer_CSTno" name="manufacturer_CSTno">
		    <br/>
		    <label for="manufacturer_email">Manufacturer Code : </label>
		    <input type="email" placeholder="Email" id="manufacturer_email" name="manufacturer_email">
		    <br/>
		    <label for="manufacturer_phone">Manufacturer Phone No. : </label>
		    <input type="number" placeholder="Phone" id="manufacturer_phone" name="manufacturer_phone">
		    <br/>
		    <label for="manufacturer_Address">Manufacturer Address : </label>
		    <input type="text" placeholder="Address" id="manufacturer_address" name="manufacturer_address">
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

		$('manufacturer_form').submit(function(e){

		//var postData = $(this).serializeArray();	
		$.ajax({
		        url: "{{action('FormController@registerManufacturer')}}",
		        type:"POST",
		        data: postData,
		        success:function(data){
		          	alert('asdas');
		        },
		        error:function(){ 
		            alert("error!");
		        }
	    	});
		$('manufacturer_form').submit();
		});
	  	
	});
</script>

</html>