@extends('master_layouts.clientui')

@section('title')
Pets
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
						<h2 class="orange-text">Pets</h2>
					</div>
					  
					
	    		  </div>
				  
				  <!-- =================TABLE ADD PET START ======================-->
				  	<div class="row">
						<div class="col s10 push-s1">
							<table class="highlight white" style="border-radius:10px;" id="datatable">

								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Animal</th>
										<th>Breed</th>
										<th>Description</th>
									</tr>
								</thead>
								
								<tbody>
									<tr>
										<td>1</td>
										<td>Bantay</td>
										<td>Cat</td>
										<td>Ba Cat</td>
										<td>Kulay Blue</td>
									
									</tr>
									
									<tr>
										<td>2</td>
										<td>MingMing</td>
										<td>Dog</td>
										<td>Philippine Sheperd</td>
										<td>Madaming Galis</td>
									
									</tr>
								
								</tbody>


							</table>
						</div>
					</div>
						</div>
					  </div>
				  </div>
				  <!-- ==========================Table add pet end===================-->

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