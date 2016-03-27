@extends('master_layouts.clientui')

@section('title')
Edit Details
@endsection

@section('content')

<div class="row">
	<div class="col s12 push-s1">
		
		<!-- ===================== Home Content ================= -->
		<div class="container grey lighten-2" style="border-radius:15px;">
			<div class="orange lighten-2-text">
			<legend class="white-text"><h2>Edit Account</h2></legend>
			</div>
<!--				<div class="container-fluid" style="margin:3%">-->
				
				<form>
					
					<div class="row">
						
						<div class="col s7 push-s2" style="margin:1%;">
						   
						
							
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
	</div>
</div>
@stop