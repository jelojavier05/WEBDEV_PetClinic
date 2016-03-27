@extends('master_layouts.clientui')

@section('title')
Add Pet
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
        <form method="post" action = "{{action('AddPetController@store')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col s6 orange-text">
                <label>Pet</label>

                <select id = "selectAnimal" name = "animal">
                    <option disabled selected value>Choose Animal</option>
                    @foreach($animals as $animal)
                        <option value = "{{$animal->intAnimalID}}">{{$animal->strAnimalName}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col s6 orange-text">
                <label>Breed</label>

                <select id = "selectBreed" name = "breed">

                </select>

            </div>

            <div class="col s6">
                <div class="input-field">
                    <input id="strpetName" type="text" class="validate" name = "petName" required="" aria-required="true">
                        <label for="strpetName">Pet Name</label> 
                </div>
            </div>

            <div class="col s6">
                <div class="input-field">
                    <input id="strdescName" type="text" class="validate" name = "description" required="" aria-required="true">
                        <label for="strdescName">Description</label> 
                </div>
            </div>

            <div class="modal-footer">
                <button input = "submit" class="btn waves-effect waves-light btn-large orange right" name="action" style="margin-right: 30px;" id = "btnAddSave">Save
                    <i class="material-icons right">send</i>
                </button>
            </div>

        </form>
            
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
    
    $(function(){
        $('#selectAnimal').change(function(){
            $.ajax({
            type: "GET",
            url: "{{action('BreedController@getBreed')}}",
            dataType: 'json',
            success: function(jsondata){
                var $dropDown = 
                    $("#selectBreed")
                        .empty()
                        .html(' ');
                $.each( jsondata, function(index, item) { 
                    if ($("#selectAnimal").val() == item.intAnimalID){
                        $dropDown.append(
                              $("<option></option>")
                                .attr("value",item.intBreedID)
                                .text(item.strBreedName)
                        );
                    }
                });	//for each

                $('select').material_select();

            },//success
            error: function(data){
                Console.log(data);
            }
        });//ajax select
        });
    });

</script>
@stop