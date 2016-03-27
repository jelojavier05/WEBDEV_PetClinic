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
        
    <!-- ==========================checking in database===================-->
        @if (session('message') == "Record Added.")
            <input type="hidden" value="Record Added." id = "checkerID">
        @elseif (session('message') == "Password do not match.")
            <input type="hidden" value="Password do not match." id = "checkerID">
        @else
            <input type="hidden" value="" id = "checkerID">
        @endif
    <!-- ==========================checking in database end===================-->
		
		<!-- ===================== Home Content ================= -->
		<div class="container grey lighten-2" style="border-radius:15px;">
			<div class="orange lighten-2-text">
			     <legend class="white-text"><h2>Registration</h2></legend>
			</div>
            <form method="post" action="{{action('RegistrationController@store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">	
                    <div class="col s7 push-s2" style="margin:1%;">
                        <h4>Account</h4>
                        
                        <div class="input-field col s12">
                            <input  id="userName" type="text" class="validate" pattern="[A-za-z0-9 ]{2,}" required="" aria-required="true" name = "usernameAdd">
                            <label data-error="Incorrect" for="userName">UserName</label>
                        </div>

                        <div class="input-field col s12">
                            <input  id="password" type="password" class="validate"  required="" aria-required="true" name = "passwordAdd">
                            <label  for="password">Password</label>
                        </div>

                        <div class="input-field col s12">
                            <input  id="confirmPassword" type="password" class="validate"  required="" aria-required="true" name = "confirmpasswordAdd">
                            <label  for="confirmPassword">Confirm Password</label>
                        </div>

                        <h4>Personal Data</h4>

                        <div class="input-field col s12">
                            <input  id="firstName" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true" name = "firstnameAdd">
                            <label data-error="Incorrect" for="firstName">First Name</label>
                        </div>

                        <div class="input-field col s12">
                            <input  id="lastName" type="text" class="validate" pattern="[A-za-z0-9 ]{2,}" required="" aria-required="true" name = "lastnameAdd">
                            <label data-error="Incorrect" for="lastName">Last Name</label>
                        </div>

                        <div class="input-field col s12">
                            <input  id="address" type="text" class="validate" pattern="[A-za-z0-9 ]{2,}" required="" aria-required="true" name = "addressAdd">
                            <label data-error="Incorrect" for="address">Address</label>
                        </div>

                        <div class="input-field col s12">
                            <input  id="contactCp" maxlength="13" type="text" class="validate" pattern="[0-9+]{11,}" required="" aria-required="true" name = "contactAdd">
                            <label data-error="Incorrect" for="contactCp">Contact Number (Mobile)</label>
                        </div>

                        <div class="input-field col s12">
                            <input  id="email"  type="email"  required="" aria-required="true" name = "emailAdd">
                            <label  for="email">Email</label>
                        </div>
                        
                        <div style="margin:2%;">
                            <button input = "submit" class="waves-effect waves-light btn-large orange right" type="submit">Ok<i class="material-icons right">send</i></button>
                        </div>
                    </div>
                </div>
            </form>
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
    
    $(function(){
        var checker = $('#checkerID').val();
        if (checker == "Record Added."){
            var toastContent = $('<span>Account Added.</span>');
            Materialize.toast(toastContent, 1500,'green', 'edit');
        }else if(checker == "Password do not match."){
            var toastContent = $('<span>Password do not match.</span>');
            Materialize.toast(toastContent, 1500,'red', 'edit');
        }
    });

</script>



</html>