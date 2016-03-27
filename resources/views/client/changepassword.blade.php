@extends('master_layouts.clientui')

@section('title')
Change Password
@endsection

@section('content')

<!-- ===================== Home Content ================= -->
		

<div class="row">
	<div class="col s12 push-s1">

			<div class="container grey lighten-2" style="border-radius:15px;">
			<div class="orange lighten-2-text">
			<legend class="white-text"><h2>Change Password</h2></legend>
			</div>

				<form>
					
					<div class="row">
						
						<div class="col s7 push-s2" style="margin:1%;">
							
							<div class="input-field col s12">
								<input  id="password" type="password" class="validate"  required="" aria-required="true" >
                                <label  for="password">New Password</label>
							</div>
							
							<div class="input-field col s12">
								<input  id="confirmPassword" type="password" class="validate"  required="" aria-required="true" >
                                <label  for="confirmPassword">Confirm New Password</label>
							</div>
							
							
							
							
							<div style="margin:2%;">
								<button class="waves-effect waves-light btn-large orange right" type="submit">Ok<i class="material-icons right">send</i></button>
							</div>
							
							
						   
						</div>
						
						
						
					
					</div>
					
					</form>
	</div>
</div>
		

@stop