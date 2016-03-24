@extends('master_layouts.maintenance')

@section('title')
Medical Service
@endsection

@section('content')

<!-- ============== background image =============== -->
		<div style='position:absolute;z-index:-1;left:0;top:0;width:100%;height:100%'>
			<div class="parallax">
				<img src="{!! URL::asset('../images/pet5.jpg') !!}" style='width:100%;height:900px; opacity:0.8;' alt='[]' />
			</div>
		</div>
				  <!-- ============== background image end =============== -->	
		
				  <div class="row">
					<div class="col s12">
						<div class="container grey lighten-2 z-depth-2" style="border-radius: 10px; margin-left:300px; margin-top:40px;">
				<div class="row">
					<div class="col s6 push-s1">
						<h2 class="orange-text">Medical Service</h2>
					</div>
					  
					<div class="col s2 offset-s2">
						<button style="margin-top: 30px;" id="btnAdd" class=" z-depth-2 btn-large green modal-trigger" href="#modaladdService"><i class="material-icons left">add</i> ADD</button>
					</div>
	    		  </div>
				  
				  <!-- =================TABLE ADD med Service START ======================-->
				  	<div class="row">
						<div class="col s10 push-s1">
							<table class="highlight white" style="border-radius:10px;" id="datatable">

								<thead>
									<tr>
										<th style="width:10px;"></th>
										<th style="width:10px;"></th>
										<th>ID</th>
										<th>Name</th>
										<th>Description</th>
									</tr>
								</thead>
								
								<tbody>
									<tr>
										<td><button class="buttonUpdate btn modal-trigger"  name="" id="edit" href="#modalmedicalserviceEdit" ><i class="material-icons">edit</i></button>
            							<label for="edit"></label></td>
                        
                        				<td><button class="buttonDelete btn red" id="delete"><i class="material-icons">delete</i></button></td>
										<td>1</td>
										<td>Acupuncture Theraphy</td>
										<td>Needle puncturing</td>
									
									</tr>
									
									<tr>
										<td><button class="buttonUpdate btn modal-trigger"  name="" id="edit" href="#modalmedicalserviceEdit" ><i class="material-icons">edit</i></button>
            							<label for="edit"></label></td>
                        
                        				<td><button class="buttonDelete btn red" id="delete"><i class="material-icons">delete</i></button></td>
										<td>2</td>
										<td>Blood Transfusion</td>
										<td>Transfer of blood</td>
									
									</tr>
								
								</tbody>


							</table>
						</div>
					</div>
						</div>
					  </div>
				  </div>
				  <!-- ==========================Table add pet end===================-->
					<!-- ========================== Modal Medical Service ADD ===================-->
	<div id="modaladdService" class="modal modal-fixed-footer" style="overflow:hidden;">
        <div class="modal-header orange"><h2 class="white-text">Add Medical Service</h2></div>
        	<div class="modal-content">

					<div class="row">
						<div class="col s8">
							<div class="input-field">
								<input  id="intServiceID" type="text" class="validate" name = "" disabled>
									<label for="intServiceID">Medical Service ID</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<div class="input-field">
								<input id="strServiceName" type="text" class="validate" name = "" required="" aria-required="true">
									<label for="strServiceName">Medical Service Name</label> 
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col s5">
							<div class="input-field">
								<input id="strdescName" type="text" class="validate" name = "" required="" aria-required="true">
									<label for="strdescName">Medical Service Description</label> 
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
			<!--=========================Modal add med service end=============-->
<!-- ========================== Modal Medical Service update ===================-->
	<div id="modalmedicalserviceEdit" class="modal modal-fixed-footer" style="overflow:hidden;">
        <div class="modal-header orange"><h2 class="white-text">Update Medical Service</h2></div>
        	<div class="modal-content">

					<div class="row">
						<div class="col s8">
							<div class="input-field">
								<input  id="intServiceID" type="text" class="validate" name = "" disabled>
									<label for="intServiceID">Medical Service ID</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<div class="input-field">
								<input id="strServiceName" type="text" class="validate" name = "" required="" aria-required="true">
									<label for="strServiceName">Medical Service Name</label> 
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col s5">
							<div class="input-field">
								<input id="strdescName" type="text" class="validate" name = "" required="" aria-required="true">
									<label for="strdescName">Medical Service Description</label> 
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
			<!--=========================Modal update med service end=============-->

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