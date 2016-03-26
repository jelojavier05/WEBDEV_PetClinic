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
	<body>
		
		
		
		  
		<nav class="orange accent-3">
			<div class="nav-wrapper">
			  <a href="mainLayout.html" class="brand-logo center">Logo</a>
			   <ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="#"></a></li>
				<li><a class="red" href="#">Logout</a></li>
			   </ul>
			  <div class="side-nav fixed grey darken-3">
				  <div class="card-panel orange">
				  	<div class="card-content">
						<div class="center"><img class="responsive circle" src="{!! URL::asset('../images/doctor.jpg') !!}" width="100px" height="100px"></div>
						<h5 class="center">Hello Doctor</h5>
					</div>
					
					
				  </div>
				  
				  <ul class="collapsible collapsible-accordion">
					<li class="bold" style="width:280px;">
						<a class="collapsible-header white-text" href="/maintenance/appointments">
							<i class="material-icons">people</i>Appointments
						</a>	  
					</li>
					  
                    <li class="bold" style="width:280px;">
						<a class="collapsible-header white-text" href="#">
							<i class="material-icons">settings</i>Maintenance<i class="mdi-navigation-arrow-drop-down right"></i>
						</a>
                            <div class="collapsible-body grey lighten-2">
                                <ul >
                                            <li>
												<a href="/maintenance/animal"><i class="material-icons left">add</i>Animal Species</a>
											</li>
													
												
                                             <li>
												<a href="/maintenance/breed"><i class="material-icons left">add</i>Breed</a>
											</li>
									
											<li>
												<a href="/maintenance/medicalservice"><i class="material-icons left">add</i>Medical Service</a>
											</li>
											
											<li>
												<a href="/maintenance/groomservice"><i class="material-icons left">add</i>Grooming Service</a>
											</li>
									
											<li>
												<a href="/maintenance/schedule"><i class="material-icons left">add</i>Schedule</a>
											</li>
								</ul>
				
			  				</div>
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
        
    $(function(){
        var checker = $('#checkerID').val();
        if (checker == "Record Added."){
            var toastContent = $('<span>Record Added.</span>');
            Materialize.toast(toastContent, 1500,'green', 'edit');
        }else if(checker == "Record Updated."){
            var toastContent = $('<span>Record Updated.</span>');
            Materialize.toast(toastContent, 1500,'green', 'edit');
        }else if(checker == "Record Exist."){
            var toastContent = $('<span>Record Exist.</span>');
            Materialize.toast(toastContent, 1500,'red', 'edit');
        }else if(checker == "Record Deleted."){
            var toastContent = $('<span>Record Deleted.</span>');
            Materialize.toast(toastContent, 1500,'green', 'edit');
        }
    });
        
  </script>
	</body>
	</main>
</html>
		
		
	