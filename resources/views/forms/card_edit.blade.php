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
			Edit a Card
		</h1>
	</div>
</div>
<div class="row">
	<div class="column column-50 column-offset-25">
		<table id="card_status_table">
			<tr>
				<th>Card SKU</th>
				<th>Card Status</th>
				<th>Action</th>
			</tr>
		</table>	
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
		$.ajax({
		        url: "{{action('FormController@findCard')}}",
		        type:"POST",
		        data: {},
		        success:function(data){
		        	var json = JSON.parse(data);
		        	var cards = json['cards'];
		          	//alert(json[0]['id']);
		          	$.each(cards,function(index,card){
		          		var status = 'Enable';
		          		if(card['card_disable'] != -1)
		          			status = 'Disable';
		          		$('#card_status_table').append(
        				'<tr><td>'+card['card_SKU_code']+'</td><td>'+card['card_status']+'</td><td><button class="toggle" id="'+card['card_SKU_code']+'" >'+
        				status+'</button></td></tr>');
		          	});
		        },
		        error:function(){ 
		            alert("error!");
		        }
	    	});
	});
	$(document).on("click",".toggle",function(){
        var card_SKU_code = event.target.id;
        $.ajax({
        	url: "{{action('FormController@editCard')}}",
        	type: "POST",
        	data: {"card_SKU_code":event.target.id},
        	success: function(data){
        		if($('#'+card_SKU_code).text() == 'Enable')
	        		$('#'+card_SKU_code).text('Disable');
        		else
        			$('#'+card_SKU_code).text('Enable');
        	},
        	error:function(){
        		alert('asd');
        	}
        });
    });
</script>
</html>