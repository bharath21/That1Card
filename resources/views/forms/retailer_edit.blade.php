<!DOCTYPE html>
<html>
<head>
	<title>Edit Retailer</title>
	
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
		<form id="codeform">
			<input type="text" id="TheCode">
		</form>
	</div>
	<div class="column">
		<button id="codebutton">Find this retailer code</button>
	</div>
</div>
<hr/>
<div class="row">
	<div class="column column-50 column-offset-25">
		<form id="retailer_form" method="POST">
		  	{{csrf_field()}}
		    <label for="retailer_code">Retailer Code : </label>
		    <input type="text" placeholder="Retailer Code" id="retailer_code" name="retailer_code">
		    <br/>
		    <label for="retailer_name">Retailer Name : </label>
		    <input type="text" placeholder="Name" id="retailer_name" name="retailer_name">
		    <br/>
		    <label for="retailer_TINno">Retailer TIN.no : </label>
		    <input type="text" placeholder="TIN No." id="retailer_TINno" name="retailer_TINno">
		    <br/>
		    <label for="retailer_CSTno">Retailer CST.no : </label>
		    <input type="text" placeholder="CST No." id="retailer_CSTno" name="retailer_CSTno">
		    <br/>
		    <label for="retailer_email">Retailer Code : </label>
		    <input type="email" placeholder="Email" id="retailer_email" name="retailer_email">
		    <br/>
		    <label for="retailer_phone">Retailer Phone No. : </label>
		    <input type="number" placeholder="Phone" id="retailer_phone" name="retailer_phone">
		    <br/>
		    <label for="retailer_Address">Retailer Address : </label>
		    <input type="text" placeholder="Address" id="retailer_address" name="retailer_address">
		    <br/>
		 
		</form>
		    <button id="edit">Edit</button>
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
		        url: "{{action('FormController@findRetailer')}}",
		        type:"POST",
		        data: {"retailer_code" : code},
		        success:function(data){
		          	$('#retailer_code').val(data['retailer_code']);
		          	$('#retailer_name').val(data['retailer_name']);
		          	$('#retailer_TINno').val(data['retailer_TINno']);
		          	$('#retailer_CSTno').val(data['retailer_CSTno']);
		          	$('#retailer_email').val(data['retailer_email']);
		          	$('#retailer_phone').val(data['retailer_phone']);
		          	$('#retailer_address').val(data['retailer_address']);
		        },
		        error:function(){ 
		            alert("error!");
		        }
	    	});
	
		});

		$('#edit').click(function(){
			data = {
				"retailer_code" : $('#retailer_code').val(),
		        "retailer_name" : $('#retailer_name').val(),
		        "retailer_TINno": $('#retailer_TINno').val(),
		        "retailer_CSTno": $('#retailer_CSTno').val(),
		        "retailer_email": $('#retailer_email').val(),
		        "retailer_phone": $('#retailer_phone').val(),
		        "retailer_address": $('#retailer_address').val()
			}

			$.ajax({
		        url: "{{action('FormController@editRetailer')}}",
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