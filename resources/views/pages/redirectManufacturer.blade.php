<!DOCTYPE html>
<html>
<head>
	<title>Register Manufacturer</title>
	
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
	<div class="column column-40"></div>
		<div class="column">
			<h3>
				Registered!	
			</h3>
	</div>
 </div>
 <br/>

 	<div class="row">
 	<br/>
 	<div class="column column-40"></div>
 	<div class="column">
		 <blockquote>
		 	<a href='{{action("PagesController@registerManufacturer")}}'>
		 		<button>Register another</button>
		 	</a>
		 </blockquote>
 	</div>
 	</div>
  	<div class="row">
 	<br/>
 	<div class="column column-40"></div>
 	<div class="column">
	 	<blockquote>
		 	<a href='{{action("PagesController@home")}}'>
		 		<button>Home</button>
		 	</a>
	 	</blockquote>
	 </div>
 
</body>
</html>