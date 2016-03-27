<!DOCTYPE html>

<html lang="en">
	<head>
	 
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<title>Services</title>
	  <meta charset="utf-8">

		<!-- ====================CSS================== -->
	
	  <link href="{!! URL::asset('../css/materialize.css') !!}" type="text/css" rel="stylesheet"/>
	  <link href="{{!! URL::asset('../css/materialize.min.css') !!}" rel="stylesheet" type="text/css" media="screen,projection" />
	  <link href="{!! URL::asset('../css/style.css') !!}" type="text/css" rel="stylesheet"/>
<!--	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">-->
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
	<body>
		
		<div style='position:absolute;z-index:-1;left:0;top:0;width:100%;height:100%'>
			<img src="{!! URL::asset('../images/petbg.jpg') !!}" style='width:100%;height:900px; opacity:0.8;' alt='[]' />
		</div>
		
		
		  
		<nav class="orange accent-3">
			<div class="nav-wrapper">
			  <a href="#" class="brand-logo"><img width="79px" height="65px" src="{!! URL::asset('../images/PCGlogo.png') !!}"/></a>
			  <ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="#"></a></li>
				<li><a href="/main/homepage">Main</a></li>
				<li><a href="/main/offeredservices">Services</a></li>
				
			  </ul>
			</div>
	    </nav>
		
		
		
		<!-- ===================== Home Content ================= -->
		<div class="container grey lighten-2" style="border-radius:15px;">
			<div class="orange lighten-2-text">
			<legend class="white-text"><h2>Services Offered</h2></legend>
				<div class="container-fluid white">
					<div class="row">
						<div class="col s6">
							<h3>Medical Services</h3>
								<div class="row">
									<div class="col s6 push-s1">
										<ul style="font-size: 18px;">
											<li>Heart Transplant</li>
											<li>Tuli</li>
										</ul>
									</div>
								</div>
					
						</div>
						
						<div class="col s6">
							<h3>Grooming Services</h3>
								<div class="row">
									<div class="col s6 push-s1">
										<ul style="font-size: 18px;">
											<li>Pet Shower</li>
											<li>Haircut</li>
										</ul>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
<!--				<div class="container-fluid" style="margin:3%">-->
				
				
<!--				</div>-->
		</div>
		
		



	</body>
	</main>
	
	<footer class="page-footer orange">
    <div class="container">
      <div class="row">
        
        <div class="col l3 s12">
          <h5 class="white-text">Pet Clinic</h5>
          <ul>
            <li class="white-text">Jason Andrew Paredes</li>
            <li class="white-text">Danisah Bryan Rosello</li>
			<li class="white-text">BSIT 3-1N</li>
          </ul>
        </div>
       
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Copyright 
      </div>
    </div>
  </footer>




</html>