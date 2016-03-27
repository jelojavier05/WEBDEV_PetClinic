@extends('master_layouts.clientui')

@section('title')
Inquire
@endsection

@section('greeting')
Hello {{$userFirstName}}
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
								<label>Date</label>
								 <input type="date" class="datepicker">
                                            
							</div>
							
							<div class="col s2">
								<div class="input-field">
									<input id="strpetName" type="number" min="1" max="24" class="validate" name = "" required="" aria-required="true">
										 
								</div>
							</div>
							
							<div class="col s1">
								<div style="font-size:20px; margin-top:20px;">To</div>
							</div>
							
							<div class="col s2">
								<div class="input-field">
									<input style="margin-left:-25px;" id="strpetName" type="number" min="1" max="24" class="validate" name = "" required="" aria-required="true" >
										
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