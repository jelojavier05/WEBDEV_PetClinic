@extends('master_layouts.clientui')

@section('title')
Inquire
@endsection

@section('content')

<div class="row">
					<div class="col s12">
						<div class="container grey lighten-2 z-depth-2" style="border-radius: 10px; margin-left:300px; margin-top:80px; padding-bottom:10px;">
				<div class="row">
					<div class="col s4 push-s1">
						<h2 class="orange-text">Inquire</h2>
					</div>
					  
					
	    		  </div>
				  
				  <!-- ================================inquire form start================================== -->
							
		<div class="row">
						<div class="col s12">
						   
							<div class="col s6 orange-text">
								<label>Schedule</label>
								 <select>
                                    <option value="" disabled selected>Choose</option>
                                   	<option>Mon</option>
									<option>Tue</option>
									<option>Wed</option>
									<option>Thu</option>
									<option>Fri</option>
									<option>Sat</option>
									<option>Sun</option>
                                 </select>
                                            
							</div>
							
							<div class="col s2">
								<div class="input-field">
									<input id="strpetName" type="text" class="validate" name = "" required="" aria-required="true" readonly>
										 
								</div>
							</div>
							
							<div class="col s1">
								<div style="font-size:20px; margin-top:20px;">To</div>
							</div>
							
							<div class="col s2">
								<div class="input-field">
									<input style="margin-left:-25px;" id="strpetName" type="text" class="validate" name = "" required="" aria-required="true" readonly >
										
								</div>
							</div>
							
							<div class="col s6 pull-s6 orange-text">
								<label>Pet Name</label>
								 <select>
                                    <option value="" disabled selected>Choose</option>
                                    <option value="1">Bantay</option>
                                    <option value="2">Mingming</option>
                                 </select>
                                            
							</div>
							
							
							<!-- =====================Medical Services Start==================== -->
							<div class="row">
								<div class="col s10 push-s1">
									<h4>Medical Services</h4>
									<div class="row">
										<div class="col s12">
											<table class="highlight white" id="datatable1">
										<thead>
											<tr>
												<th></th>
												<th>Name</th>
												<th>Description</th>
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td><div class="col s12" style="margin:1%;">
									   				<input type="checkbox" id="medservice1" class="filled-in checkbox-orange"/>
      							   					<label for="medservice1" class="black-text"></label></br></div>
												</td>
												<td>Checkup</td>
												<td>test test</td>
											</tr>
											
											<tr>
												<td><div class="col s12" style="margin:1%;">
									   				<input type="checkbox" id="medservice2" class="filled-in checkbox-orange"/>
      							   					<label for="medservice2" class="black-text"></label></br></div>
												</td>
												<td>Tuli</td>
												<td>test test</td>
											</tr>
										</tbody>
									
									</table>
										</div>
										
									</div>	
									  
								</div>
							</div>
							
							
							<!--===============Medical Services End=================== -->
							<!-- ===============Grooming Services Start ============== -->
							<div class="row">
								<div class="col s10 push-s1">
									<h4>Grooming Services</h4>
									<div class="row">
										<div class="col s12">
											<table class="highlight white" id="datatable2">
										<thead>
											<tr>
												<th></th>
												<th>Name</th>
												<th>Description</th>
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td><div class="col s12" style="margin:1%;">
									   				<input type="checkbox" id="groomservice1" class="filled-in checkbox-orange"/>
      							   					<label for="groomservice1" class="black-text"></label></br></div>
												</td>
												<td>Haircut</td>
												<td>test test</td>
											</tr>
											
											<tr>
												<td><div class="col s12" style="margin:1%;">
									   				<input type="checkbox" id="groomservice2" class="filled-in checkbox-orange"/>
      							   					<label for="groomservice2" class="black-text"></label></br></div>
												</td>
												<td>Pet Shower</td>
												<td>test test</td>
											</tr>
										</tbody>
									
									</table>
										</div>
										
									</div>	
									  
								</div>
							</div>
							<!-- =============== Grooming Services End ============= -->
							
							
							<div style="margin:2%;">
								<a class="waves-effect waves-light btn-large orange right">Ok<i class="material-icons right">send</i></a>
							</div>
						</div>
		</div>
							
							
				<!-- ================================inquire form end================================== -->

@stop
@section('script')

	
	
	<script>
		$(document).ready(function(){
    		$('#datatable').DataTable({
				"pageLength":5,
				"lengthMenu": [5,10,15,20]
			});
			
		});		
	
	</script>
@stop