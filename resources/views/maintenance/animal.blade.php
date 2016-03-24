@extends('master_layouts.maintenance')

@section('title')
Animal/Pet
@endsection

@section('content')
<!-- ============== background image =============== -->
		<div style='position:absolute;z-index:-1;left:0;top:0;width:100%;height:100%'>
			<div class="parallax">
				<img src="{!! URL::asset('../images/pet2.jpg') !!}" style='width:100%;height:900px; opacity:0.8;' alt='[]' />
			</div>
		</div>
				  <!-- ============== background image end =============== -->
				  
				  <div class="row">
					<div class="col s12">
						<div class="container grey lighten-2 z-depth-2" style="border-radius: 10px;margin-left:300px; margin-top:40px;">
							<div class="row">
								<div class="col s4 push-s1">
									<h2 class="orange-text">Pet</h2>
								</div>

								<div class="col s2 offset-s4">
									<button style="margin-top: 30px;" id="btnAdd" class=" z-depth-2 btn-large green modal-trigger" href="#modaladdPet"><i class="material-icons left">add</i> ADD</button>
								</div>
	    		  </div>
				  
				  <!-- =================TABLE ADD PET START ======================-->
				  	<div class="row">
						<div class="col s10 push-s1">
							<table class="highlight white" style="border-radius:10px;" id="datatable">

								<thead>
									<tr>
										<th style="width:10px;"></th>
										<th style="width:10px;"></th>
										<th>ID</th>
										<th>Name</th>
									</tr>
								</thead>
								
								<tbody>
									<tr>
										<td><button class="buttonUpdate btn modal-trigger"  name="" id="edit" href="#modalnobEdit" ><i class="material-icons">edit</i></button>
            							<label for="edit"></label></td>
                        
                        				<td><button class="buttonDelete btn red" id="delete"><i class="material-icons">delete</i></button></td>
										<td>1</td>
										<td>Dog</td>
									
									</tr>
									
									<tr>
										<td><button class="buttonUpdate btn modal-trigger"  name="" id="edit" href="#modalnobEdit" ><i class="material-icons">edit</i></button>
            							<label for="edit"></label></td>
                        
                        				<td><button class="buttonDelete btn red" id="delete"><i class="material-icons">delete</i></button></td>
										<td>2</td>
										<td>Cat</td>
									
									</tr>
								
								</tbody>


							</table>
						</div>
					</div>
						</div>
					  </div>
				  </div>
				  <!-- ==========================Table add pet end===================-->
	<!-- ==================modal pet add====================-->			
	<div id="modaladdPet" class="modal modal-fixed-footer" style="overflow:hidden;">
        <div class="modal-header orange"><h2 class="white-text">Add Pet</h2></div>
        	<div class="modal-content">

					<div class="row">
						<div class="col s8">
							<div class="input-field">
								<input  id="intpetID" type="text" class="validate" name = "" disabled>
									<label for="intpetID">Pet ID</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<div class="input-field">
								<input id="strpetName" type="text" class="validate" name = "" required="" aria-required="true">
									<label for="strpetName">Pet Name</label> 
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

