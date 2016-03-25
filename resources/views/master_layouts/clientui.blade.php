<!DOCTYPE html>

<html lang="en">
	<head>
	 
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<title>@yield('title')</title>
	  <meta charset="utf-8">

		<!-- ====================CSS================== -->
	
	  <link href="{!! URL::asset('../css/materialize.css') !!}" type="text/css" rel="stylesheet"/>
	  <link href="{{!! URL::asset('../css/materialize.min.css') !!}" rel="stylesheet" type="text/css" media="screen,projection" />
	  <link href="{!! URL::asset('../css/style.css') !!}" type="text/css" rel="stylesheet"/>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  
	  <script type="text/javascript" src="{!! URL::asset('../js/jquery-2.2.1.js') !!}"></script>
<!--	  <script type="text/javascript" src="{{!! URL::asset('../js/materialize.js') !!}}"></script>-->
	  <script type="text/javascript" src="{!! URL::asset('../js/materialize.min.js') !!}"></script>
	  <script type="text/javascript" src="{!! URL::asset('../js/init.js') !!}"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	<link href="http://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"/>  
	<script type="text/javascript" src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	  
	  

	</head>
	<header>
	</header>
	<main>
	<body style="overflow-x:hidden;">

		  
		<nav class="orange accent-3">
			<div class="nav-wrapper">
			  <a href="mainLayout.html" class="brand-logo center">Logo</a>
			  <ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="#"></a></li>
				<li><a class="red" href="#">Logout</a></li>
			  <div class="side-nav fixed grey darken-3">
				  <div class="card-panel orange">
				  	<div class="card-content">
						<div class="center"><img class="responsive circle" src="{!! URL::asset('../images/owner.jpg') !!}" width="150px" height="150px"></div>
						<h5 class="center">Hello Person</h5>
					</div>
					
					
				  </div>
				  
				  <ul class="collapsible collapsible-accordion">
                    
					  <li class="bold" style="width:280px;">
						<a class="white-text" href="/client/viewpets">
							<i class="material-icons left">pets</i>Pets
						</a>	  
					  </li>
					  
					  <li class="bold" style="width:280px;">
						<a class="white-text" href="/client/addpet">
							<i class="material-icons left">add</i>Add Pet
						</a>	  
					  </li>
					  
					  <li class="bold" style="width:280px;">
						<a class="white-text" href="/client/inquire">
							<i class="material-icons left">people</i>Inquire
						</a>
                            
					  </li>
				  </ul>
	    </nav>
				
	@yield('content')
	@yield('script')
	<script>
    $(document).ready(function(){
        $('.modal-trigger').leanModal();
    });
	</script>
				
	<script>
    
    $(document).ready(function() {
        $('select').material_select();
    });
        
  </script>
	</body>
	</main>
</html>