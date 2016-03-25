@extends('master_layouts.clientui')

@section('title')
Add Pet
@endsection

@section('content')

<!-- ============== background image =============== -->
		<div style='position:absolute;z-index:-1;left:0;top:0;width:100%;height:100%'>
			<div class="parallax">
				<img src="{!! URL::asset('../images/pet3.jpg') !!}" style='width:100%;height:900px; opacity:0.8;' alt='[]' />
			</div>
		</div>
				  <!-- ============== background image end =============== -->		  
		
				<div class="row">
					<div class="col s12">
						<div class="container grey lighten-2 z-depth-2" style="border-radius: 10px; margin-left:300px; margin-top:80px; padding-bottom:10px;">
				<div class="row">
					<div class="col s4 push-s1">
						<h2 class="orange-text">Add Pet</h2>
					</div>
					  
					
	    		  </div>
				  
				  <!-- ================================add pet form start================================== -->
							
		<div class="row">
						<div class="col s12">
						   
							<div class="col s6 orange-text">
								<label>Pet</label>
								 <select>
                                    <option value="" disabled selected>Choose</option>
                                    <option value="1">Dog</option>
                                    <option value="2">Cat</option>
                                 </select>
                                            
							</div>
							
							<div class="col s6 orange-text">
								<label>Breed</label>
								 <select>
                                    <option value="" disabled selected>Choose</option>
                                    <option value="1">Labrador Retriever</option>
                                    <option value="2">Persian</option>
                                 </select>
                                            
							</div>
							
							<div class="col s6">
								<div class="input-field">
									<input id="strpetName" type="text" class="validate" name = "" required="" aria-required="true">
										<label for="strpetName">Pet Name</label> 
								</div>
							</div>
							
							<div class="col s6">
								<div class="input-field">
									<input id="strdescName" type="text" class="validate" name = "" required="" aria-required="true">
										<label for="strdescName">Description</label> 
								</div>
							</div>
							
							<div style="margin:2%;">
								<a class="waves-effect waves-light btn-large orange right">Save<i class="material-icons right">send</i></a>
							</div>
						</div>
		</div>
							
							
				<!-- ================================add pet form end================================== -->
							
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