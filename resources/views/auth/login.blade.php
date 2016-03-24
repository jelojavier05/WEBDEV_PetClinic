<!DOCTYPE html>

<html lang="en">
	<head>
	 
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<title>Login/Signup</title>
	  <meta charset="utf-8">

		<!-- ====================CSS================== -->
	
	  <link href="{!! URL::asset('../css/materialize.css') !!}" type="text/css" rel="stylesheet"/>
<!--	  <link rel="stylesheet" type="text/css" media="screen,projection" href="{{!! URL::asset('../css/materialize.min.css') !!}"/>-->
	  <link href="{!! URL::asset('../css/style.css') !!}" type="text/css" rel="stylesheet"/>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  
	  <script type="text/javascript" src="{!! URL::asset('../js/jquery-2.1.1.min.js') !!}"></script>
<!--	  <script type="text/javascript" src="{{!! URL::asset('../js/materialize.js') !!}}"></script>-->
	  <script type="text/javascript" src="{!! URL::asset('../js/materialize.min.js') !!}"></script>
	  <script type="text/javascript" src="{!! URL::asset('../js/init.js') !!}"></script>
<!--	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>-->
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
		</br>
			<div class="row">
				
				
				
				<div class="col s6 push-s1">
					<div class="card transparent z-depth-0" style="margin-top:150px;">
						<div class="card-content">
							<h1 class="center orange-text"><i>Taking Care of Man's Beloved Companion</i></h1>
						</div>
					</div>
				
				</div>
				
				<div class="col s5 push-s1">
					<div class="card grey lighten-2 z-depth-5" style="padding:3%; border-radius: 10px;">
						<div class="card-content">
							<span class="card-title">Log-In</span></br>
								
								<div class="input-field">
									<input id="username" type="text"><label for="username">Username</label>
								</div>
								
								<div class="input-field">
									<input id="password" type="password"><label for="password">Password</label>
								</div>
								
								<div class="center">
									<button class=" btn-large orange lighten-1 z-depth-2">Login</button>
								</div>
								</br>
								
								<div class="center grey-text">
									<p class="flow-text">-----------------------------OR----------------------------</p>
								</div>
								</br>
								
								<div class="center">
									<a class=" btn-large orange darken-4 z-depth-2" href="/account/register">Create New Account</a>
								</div>
								</br>
								
								<div class="center grey-text">
									<p class="flow-text">-----------------------------------------------------------</p>
								</div>
								</br>
					
								<div class="center">
									Sign in with <a href="#"><i class="mdi-facebook"></i>Facebook</a>
								</div>
								
						</div>
					</div>
				</div>
				




			</div>
		
		



	</body>
	</main>
	
	<footer class="page-footer orange accent-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">Hello Hello Hello Hello Hello Hello Hello</p>
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
            © 2016 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>


<script>

	 $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );
	
</script>








</html>