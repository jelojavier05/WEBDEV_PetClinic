@extends('master_layouts.maintenance')

@section('title')
Appointments
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
						<h2 class="orange-text">Appointments</h2>
					</div>
					  
					
	    		  </div>
                            
                            
        @if (session('message') == "1")
            <input type="hidden" value="1" id = "checkerID">
        @elseif (session('message') == "0")
            <input type="hidden" value="0" id = "checkerID">
        @else
            <input type="hidden" value="" id = "checkerID">
        @endif
				  
				  <!-- =================TABLE ADD PET START ======================-->
				  	<div class="row">
						<div class="col s10 push-s1">
							<table class="highlight white" style="border-radius:10px;" id="datatable">

								<thead>
									<tr>
										<th style="width:10px;"></th>
										<th style="width:10px;"></th>
										<th>ID</th>
										<th>Date</th>
										<th>Time</th>
										<th>Client Username</th>
										<th>Pet Name</th>
										<th>Breed</th>
										
									</tr>
								</thead>
								
								<tbody>
									@foreach($appointments as $appointment)
                                        <tr>
                                            <form method="post" action="{{action('AppointmentsController@approved')}}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <td>
                                                    <input type="hidden" name="appointmentID" value="{{$appointment->intAppointmentID}}">
                                                    <button class="buttonUpdate btn" id="{{$appointment->intAppointmentID}}" >
                                                        <i class="material-icons">check</i>
                                                    </button>
                                                    <label for="{{$appointment->intAppointmentID}}"></label>
                                                </td>
                                            </form>
                                            <form method="post" action="{{action('AppointmentsController@declined')}}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <td>
                                                    <input type="hidden" name="appointmentID" value="{{$appointment->intAppointmentID}}">
                                                    <button input = "submit" class="buttonDelete btn red" id="{{$appointment->intAppointmentID}}">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </form>
                                            
                                            <td>{{$appointment->intAppointmentID}}</td>
                                            <td>{{$appointment->dateAppointment}}</td>
                                            <td>{{$appointment->intTime}}</td>
                                            <td>{{$appointment->User->strUserName}}</td>
                                            <td>{{$appointment->Pet->strPetName}}</td>
                                            <td>{{$appointment->Pet->Breed->strBreedName}}</td>
                                        </tr>
								    @endforeach
								</tbody>



							</table>
						</div>
					</div>
						</div>
					  </div>
				  </div>
				  <!-- ==========================Table add pet end===================-->
					<!--=========================Modal Appointments Start =============-->
<!--
	<div id="modalservices" class="modal modal-fixed-footer" style="overflow:hidden; width:700px !important;">
        <div class="modal-header orange"><h2 class="white-text">Add Schedule</h2></div>
        	<div class="modal-content">
				<h4>Medical Services</h4>
					<ul>
						<li>Tuli</li>
						<li>Heart Transplant</li>
					</ul>
				<h4>Grooming Services</h4>
					<ul>
						<li>Pet Shower</li>
						<li>Haircut</li>
					</ul>
			</div>
	</div>
-->
	
				
					<!--========================Modal Appointments End =============== -->

@stop
@section('script')

	
	
	<script>
		$(document).ready(function(){
    		$('#datatable').DataTable({
				"pageLength":5,
				"lengthMenu": [5,10,15,20]
			});
			
		});		
        
    $(function(){
        var checker = $('#checkerID').val();
        if (checker == "1"){
            var toastContent = $('<span>Appointment Approved.</span>');
            Materialize.toast(toastContent, 1500,'green', 'edit');
        }else if(checker == "0"){
            var toastContent = $('<span>Appointment Declined.</span>');
            Materialize.toast(toastContent, 1500,'red', 'edit');
        }
    });
	
	</script>
@stop