@extends('master_layouts.maintenance')

@section('title')
Breed
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
						<div class="container grey lighten-2 z-depth-2" style="border-radius: 10px; margin-left:300px; margin-top:40px;">
				<div class="row">
					<div class="col s4 push-s1">
						<h2 class="orange-text">Breed</h2>
					</div>
					  
					<div class="col s2 offset-s4">
						<button style="margin-top: 30px;" id="btnAdd" class=" z-depth-2 btn-large green modal-trigger" href="#modaladdBreed"><i class="material-icons left">add</i> ADD</button>
					</div>
	    		  </div>
				  
				  <!-- =================TABLE ADD BREED START ======================-->
				  	<div class="row">
						<div class="col s10 push-s1">
							<table class="highlight white" style="border-radius:10px;" id="datatable">

								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Pet Type</th>
									</tr>
								</thead>
								
								<tbody>
									<tr>
										<td>1</td>
										<td>Labrador Retriever</td>
										<td>Dog</td>
									
									</tr>
									
									<tr>
										<td>2</td>
										<td>Persian</td>
										<td>Cat</td>
									
									</tr>
								
								</tbody>


							</table>
						</div>
					</div>
						</div>
					</div>
				  
				</div>
				  <!-- ==========================Table add breed end===================-->
				<!--============================ modal breed add ===================-->
	<div id="modaladdBreed" class="modal modal-fixed-footer" style="overflow:hidden;">
        <div class="modal-header orange"><h2 class="white-text">Add Breed</h2></div>
        	<div class="modal-content">

					
				
				
					<div class="row">
						<div class="col s8">
							<div class="input-field">
								<input  id="intbreedID" type="text" class="validate" name = "" disabled>
									<label for="intbreedID">Breed ID</label>
							</div>
						</div>
					</div>
				
				    <div class="row">
						<div class="col s5">
							<div>
								<label for="strbreedName">Pet Type</label> 
								<select>
									<option>Dog</option>
									<option>Cat</option>
								</select>
									
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col s5">
							<div class="input-field">
								<input id="strbreedName" type="text" class="validate" name = "" required="" aria-required="true">
									<label for="strbreedName">Breed Name</label> 
							</div>
						</div>
					</div>
					
				
						
	<!-- Modal Button Save -->
				
		<div class="modal-footer">
			<button class="btn waves-effect waves-light" name="action" style="margin-right: 30px;" id = "btnAddSave">Save
    			<i class="material-icons right">send</i>
  			</button>
    	</div>
    		</div>
<!--				 </form> -->
		</div>
			<!--=========================Modal add pet start=============-->
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