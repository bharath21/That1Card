<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
		<link rel="stylesheet" href="https://milligram.github.io/css/milligram.min.css">

</head>
<body>
 <br/>
 <div class="row">
	<div class="column column-40"></div>
		<div class="column">
			<h3>
				<b>DashBoard</b>	
			</h3>
	</div>
 </div>
 <br/>
 <div class="row">
	<div class="column column-40"></div>
		<div class="column">
			<h4>
				Register a ...	
			</h4>
	</div>
 </div>

 	<div class="row">
 	<br/>
 	<div class="column column-25"></div>
 	<div class="column">
		 <blockquote>
		 	<a href='{{action("PagesController@registerManufacturer")}}'>
		 		<button>Manufacturer</button>
		 	</a>
		 	<a href='{{action("PagesController@registerRetailer")}}'>
		 		<button>Retailer</button>
		 	</a>
		 	<a href='{{action("PagesController@registerProcurement")}}'>
		 		<button>Procurement</button>
		 	</a>
		 </blockquote>

 	</div>
 	</div>

<!-- Edit Buttons-->
 <div class="row">
	<div class="column column-40"></div>
		<div class="column">
			<h4>
				Edit a ...	
			</h4>
	</div>
 </div>
	
  	<div class="row">
 	<br/>
 	<div class="column column-25"></div>
 	<div class="column">
	 	<blockquote>
		 	<a href='{{action("PagesController@editManufacturer")}}'>
		 		<button>Manufacturer</button>
		 	</a>
		 	<a href='{{action("PagesController@editRetailer")}}'>
		 		<button>Retailer</button>
		 	</a>
	 	</blockquote>
	 </div>
 

</body>
</html>