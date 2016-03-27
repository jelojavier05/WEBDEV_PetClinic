@extends('master_layouts.clientui')

@section('title')
Pets
@endsection

@section('greeting')
Hello {{$userFirstName}}
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
                <!-- ==========================checking in database===================-->
                @if (session('message') == "Pet Added.")
                    <input type="hidden" value="Pet Added." id = "checkerID">
                @else
                    <input type="hidden" value="" id = "checkerID">
                @endif
				<!--============================ modal breed add ===================-->                            
                            
				  
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
									@foreach($pets as $pet)
                                        <tr>
                                            <td>{{$pet->intPetID}}</td>
                                            <td>{{$pet->strPetName}}</td>
                                            <td>{{$pet->Animal->strAnimalName}}</td>
                                            <td>{{$pet->Breed->strBreedName}}</td>
                                            <td>{{$pet->strDescription}}</td>

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
        if (checker == "Pet Added."){
            var toastContent = $('<span>Pet Added.</span>');
            Materialize.toast(toastContent, 1500,'green', 'edit');
        }
    });
	</script>
@stop