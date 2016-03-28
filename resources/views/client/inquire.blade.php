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
        @if (session('message') == "1")
            <input type="hidden" value="1" id = "checkerID">
        @elseif (session('message') == "0")
            <input type="hidden" value="0" id = "checkerID">
        @else
            <input type="hidden" value="" id = "checkerID">
        @endif		
                            
                            
<div class="row">
    <form method="post" action = "{{action('InquireController@store')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col s12">
            <div class="col s6 orange-text">
                <label>Date</label>
                 <input type="date" class="datepicker" name = "dateAppointment">
            </div>
            <div class="col s2">

                <div class="input-field">
                    <label>Time </label>
                    <input id="strpetName" type="number" min="1" max="24" class="validate" name = "time" required="" aria-required="true">

                </div>
            </div>
            <div class="col s6 pull-s6 orange-text">
                <label>Pet Name</label>
                 <select name = "petName">
                    <option value="" disabled selected>Choose</option>
                    @foreach($pets as $pet)
                        <option value = "{{$pet->intPetID}}">{{$pet->strPetName}}</option>
                    @endforeach
                 </select>

            </div>
            <div style="margin:2%;">
                <button input = "submit" class="waves-effect waves-light btn-large orange right" type="submit">Send<i class="material-icons right">send</i></button>
            </div>
        </div>
    </form>
        
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
        
        $(function(){
            var checker = $('#checkerID').val();
            if (checker == "1"){
                var toastContent = $('<span>Successful</span>');
                Materialize.toast(toastContent, 1500,'green', 'edit');
            }
        });
	
	</script>
@stop