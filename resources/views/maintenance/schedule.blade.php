@extends('master_layouts.maintenance')

@section('title')
Schedule
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
						<h2 class="orange-text">Schedule</h2>
					</div>
					  
					<div class="col s2 offset-s4">
						<button style="margin-top: 30px;" id="btnAdd" class=" z-depth-2 btn-large green modal-trigger" href="#modaladdSchedule"><i class="material-icons left">add</i> ADD</button>
					</div>
	    		  </div>
				  
				  <!-- =================TABLE ADD schedule START ======================-->
				  	<div class="row">
						<div class="col s10 push-s1">
							<table class="highlight white" style="border-radius:10px;" id="datatable">

								<thead>
									<tr>
										<th style="width:10px;"></th>
										<th style="width:10px;"></th>
										<th>ID</th>
										<th>Day</th>
										<th>From</th>
										<th></th>
										<th>To</th>
										<th></th>
									</tr>
								</thead>
								
								<tbody>
									<tr>
										<td><button class="buttonUpdate btn modal-trigger"  name="" id="edit" href="#modalscheduleEdit" ><i class="material-icons">edit</i></button>
            							<label for="edit"></label></td>
                        
                        				<td><button class="buttonDelete btn red" id="delete"><i class="material-icons">delete</i></button></td>
										<td>1</td>
										<td>Monday</td>
										<td>9</td>
										<td>AM</td>
										<td>5</td>
										<td>PM</td>
									
									</tr>
									
									<tr>
										<td><button class="buttonUpdate btn modal-trigger"  name="" id="edit" href="#modalscheduleEdit" ><i class="material-icons">edit</i></button>
            							<label for="edit"></label></td>
                        
                        				<td><button class="buttonDelete btn red" id="delete"><i class="material-icons">delete</i></button></td>
										<td>2</td>
										<td>Wednesday</td>
										<td>9</td>
										<td>AM</td>
										<td>5</td>
										<td>PM</td>
									
									</tr>
								
								</tbody>


							</table>
						</div>
					</div>
						</div>
					</div>
				  
				</div>
				  <!-- ==========================Table add schedule end===================-->
				<!--============================ modal schedule add ===================-->
	<div id="modaladdSchedule" class="modal modal-fixed-footer" style="overflow:hidden; width:500px !important;">
        <div class="modal-header orange"><h2 class="white-text">Add Schedule</h2></div>
        	<div class="modal-content">

				
					
				    <div class="row">
						<div class="col s8" style="margin-top:-20px;">
							<div>
								<label for="strDay">Day</label> 
								<select>
									
									<option>Monday</option>
									<option>Tuesday</option>
									<option>Wednesday</option>
									<option>Thursday</option>
									<option>Friday</option>
									<option>Saturday</option>
									<option>Sunday</option>
								</select>
									
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col s5">
							
<!--								<div class="input-field">-->
									<label for="intFromtime">From</label>
									<input  id="intFromtime" type="number" min="1" max="12" class="validate" name = "">
<!--								</div>-->
							
						</div>
						
						<div class="col s5">
							<div>
								<label for="strShiftfrom" style="visibility:hidden;">test</label> 
								<select>
									<option>AM</option>
									<option>PM</option>
								</select>
									
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col s5">
							
<!--								<div class="input-field">-->
									<label for="intTotime">To</label>
									<input  id="intTotime" type="number" min="1" max="12" class="validate" name = "">
<!--								</div>-->
							
						</div>
						
						<div class="col s5">
							<div>
								<label for="strShiftto" style="visibility:hidden;">test</label> 
								<select>
									<option>AM</option>
									<option>PM</option>
								</select>
									
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
			<!--=========================Modal add schedule end=============-->
				
		<!--============================ modal schedule update ===================-->
	<div id="modalscheduleEdit" class="modal modal-fixed-footer" style="overflow:hidden; height:900px !important;">
        <div class="modal-header orange"><h2 class="white-text">Update Schedule</h2></div>
        	<div class="modal-content">

				
					
				    <div class="row">
						<div class="col s5" style="margin-top:-20px;">
							<div>
								<label for="strDay">Day</label> 
								<select>
									
									<option>Mon</option>
									<option>Tue</option>
									<option>Wed</option>
									<option>Thu</option>
									<option>Fri</option>
									<option>Sat</option>
									<option>Sun</option>
								</select>
									
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col s2">
							
<!--								<div class="input-field">-->
									<label for="intFromtime">From</label>
									<input  id="intFromtime" type="number" min="1" max="12" class="validate" name = "">
<!--								</div>-->
							
						</div>
						
						<div class="col s2">
							<div>
								<label for="strShiftfrom" style="visibility:hidden;">test</label> 
								<select>
									<option>AM</option>
									<option>PM</option>
								</select>
									
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col s2">
							
<!--								<div class="input-field">-->
									<label for="intTotime">To</label>
									<input  id="intTotime" type="number" min="1" max="12" class="validate" name = "">
<!--								</div>-->
							
						</div>
						
						<div class="col s2">
							<div>
								<label for="strShiftto" style="visibility:hidden;">test</label> 
								<select>
									<option>AM</option>
									<option>PM</option>
								</select>
									
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
			<!--=========================Modal update Schedule end=============-->
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