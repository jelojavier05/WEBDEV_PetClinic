<!DOCTYPE html>

<html lang="en">
	<head>
	 
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<title>Registration</title>
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
	<body class="grey ligten-3">
		
<!--
		<div style='position:absolute;z-index:-1;left:0;top:0;width:100%;height:100%'>
			<img src="{!! URL::asset('../images/petbg.jpg') !!}" style='width:100%;height:900px; opacity:0.8;' alt='[]' />
		</div>
-->
		
		
		  
		<nav class="orange accent-3">
			<div class="nav-wrapper">
			  <a href="mainLayout.html" class="brand-logo">Logo</a>
			  <ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="#"></a></li>
				<li><a href="#">Main</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">About Us</a></li>
			  </ul>
			</div>
	    </nav>
		
		
		
		<!-- ===================== Home Content ================= -->
		<div class="container grey lighten-2" style="border-radius:15px;">
			<div class="orange lighten-2-text">
			<legend class="white-text"><h2>Registration</h2></legend>
			</div>
<!--				<div class="container-fluid" style="margin:3%">-->
				
				<form>
					
					<div class="row">
						
						<div class="col s7 push-s2" style="margin:1%;">
						   
							
							<div class="input-field col s12">
								<input  id="userName" type="text" class="validate" pattern="[A-za-z0-9 ]{2,}" required="" aria-required="true" >
                                <label data-error="Incorrect" for="userName">UserName</label>
							</div>
							
							<div class="input-field col s12">
								<input  id="password" type="password" class="validate"  required="" aria-required="true" >
                                <label  for="password">Password</label>
							</div>
							
							<div class="input-field col s12">
								<input  id="confirmPassword" type="password" class="validate"  required="" aria-required="true" >
                                <label  for="confirmPassword">Confirm Password</label>
							</div>
							
							<h4>Personal Data</h4>
							
							<div class="input-field col s12">
								<input  id="firstName" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true" >
                                <label data-error="Incorrect" for="firstName">First Name</label>
							</div>
							
							<div class="input-field col s12">
								<input  id="middleName" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true" >
                                <label data-error="Incorrect" for="middleName">Middle Name</label>
							</div>
							
							<div class="input-field col s12">
								<input  id="lastName" type="text" class="validate" pattern="[A-za-z0-9 ]{2,}" required="" aria-required="true" >
                                <label data-error="Incorrect" for="lastName">Last Name</label>
							</div>
							
							<div class="input-field col s12">
								<input  id="address" type="text" class="validate" pattern="[A-za-z0-9 ]{2,}" required="" aria-required="true" >
                                <label data-error="Incorrect" for="address">Address</label>
							</div>
							
							<div class="input-field col s12">
								<input  id="contactCp" maxlength="13" type="text" class="validate" pattern="[0-9+]{11,}" required="" aria-required="true">
                                <label data-error="Incorrect" for="contactCp">Contact Number (Mobile)</label>
							</div>
							
							<div class="input-field col s12">
								<input  id="contactLandline" maxlength="10" type="text" class="validate" pattern="[0-9+]{7,}" required="" aria-required="true">
                                <label data-error="Incorrect" for="contactLandline">Contact Number (Landline)</label>
							</div>
							
							<div class="input-field col s12">
								<input  id="email"  type="email"  required="" aria-required="true">
                                <label  for="email">Email</label>
							</div>
							
							
							<div class="col s1"><span style="color: #ef6c00;">Photo</span></div>
							<div class="file-field input-field col s12">
								
								<div class="btn orange">
									<span>Upload</span>
									<input type="file">
									
								</div>
								
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
								</div>
							</div>
							
							
							<div style="margin:2%;">
								<button class="waves-effect waves-light btn-large orange right" type="submit">Ok<i class="material-icons right">send</i></button>
							</div>
							
							
						   
						</div>
						
						
						
					
					</div>
					
					</form>
<!--				</div>-->
		</div>
		
		



	</body>
	</main>
	
	<footer class="page-footer orange accent-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">PET CLINIC PET CLINIC PET CLINIC PET CLINIC PET CLINIC</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright TeamKups
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
<script>
	$('#textarea1').val('New Text');
  	$('#textarea1').trigger('autoresize');
</script>

<script>
    
    $(document).ready(function() {
        $('select').material_select();
    });
        
  
    
    
   
</script>



</html>