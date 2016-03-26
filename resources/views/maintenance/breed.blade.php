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
                <!-- =================TABLE ADD BREED START ======================-->
<div class="row">
    <div class="col s12 push-s1">
        <div class="container grey lighten-2 z-depth-2" style="border-radius: 10px; margin-top:40px;">
            <div class="row">
                <div class="col s4 push-s1">
                    <h2 class="orange-text">Breed</h2>
                </div>

                <div class="col s3 offset-s4">
                    <button style="margin-top: 30px;" id="btnAdd" class=" z-depth-2 btn-large green modal-trigger" href="#modaladdBreed">
                        <i class="material-icons left">add</i> ADD
                    </button>
                </div>
            </div>
        
            <div class="row">
                <div class="col s10 push-s1">
                    <table class="highlight white" style="border-radius:10px;" id="datatable">

                        <thead>
                            <tr>
                                <th style="width:10px;"></th>
                                <th style="width:10px;"></th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Pet Type</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($breeds as $breed)
                                <tr>
                                    <td>
                                        <button class="buttonUpdate btn modal-trigger"  name="" id="{{$breed->intBreedID}}" href="#modalbreedEdit" >
                                            <i class="material-icons">edit</i>
                                        </button>
                                    <label for="edit"></label>
                                    </td>

                                    <td>
                                        <button class="buttonDelete btn red modal-trigger" id="{{$breed->intBreedID}}" href="#modalbreedDelete">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                    <td id = "tableID{{$breed->intBreedID}}">{{$breed->intBreedID}}</td>
                                    <td id = "tableName{{$breed->intBreedID}}">{{$breed->strBreedName}}</td>
                                    <td id = "tableType{{$breed->intBreedID}}">{{$breed->Animal->strAnimalName}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
                <!-- ==========================checking in database===================-->
@if (session('message') == "Record Added.")
    <input type="hidden" value="Record Added." id = "checkerID">
@elseif (session('message') == "Record Updated.")
    <input type="hidden" value="Record Updated." id = "checkerID">
@elseif (session('message') == "Record Exist.")
    <input type="hidden" value="Record Exist." id = "checkerID">
 @elseif (session('message') == "Record Deleted.")
    <input type="hidden" value="Record Deleted." id = "checkerID">
@else
    <input type="hidden" value="" id = "checkerID">
@endif
				<!--============================ modal breed add ===================-->
<div id="modaladdBreed" class="modal modal-fixed-footer" style="overflow:hidden;">
    <form method="post" action="{{action('BreedController@store')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                        <select id = "selectAnimalTypeAdd" name = "animalTypeIDAdd">
                            @foreach($animals as $animal)
                                <option value = "{{$animal->intAnimalID}}">{{$animal->strAnimalName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s5">
                    <div class="input-field">
                        <input id="addBreed" type="text" class="validate" name = "nameAdd" required="" aria-required="true">
                        <label for="addBreed">Breed Name</label> 
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button input = "submit" class="btn waves-effect waves-light" name="action" style="margin-right: 30px;" id = "btnAddSave">Save
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </form>
</div>
                <!--============================ modal breed update ===================-->

<div id="modalbreedEdit" class="modal modal-fixed-footer" style="overflow:hidden;">
    <form method="post" action="{{action('BreedController@update')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-header orange"><h2 class="white-text">Update Breed</h2></div>
        <div class="modal-content">
            <div class="row">
                <div class="col s8">
                    <div class="input-field">
                        <input  id="editID" type="text" class="validate" name = "idEdit" readonly value = " ">
                        <label for="editID">Breed ID</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s5">
                    <div>
                        <label for="strbreedName">Pet Type</label> 
                        <select id = "selectAnimalEdit" name = "animalTypeIDEdit">
                            @foreach($animals as $animal)
                                <option value = "{{$animal->intAnimalID}}">{{$animal->strAnimalName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s5">
                    <div class="input-field">
                        <input id="editBreed" type="text" class="validate" name = "nameEdit" required="" aria-required="true" value = " ">
                        <label for="editBreed">Breed Name</label> 
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn waves-effect waves-light" name="action" style="margin-right: 30px;" id = "btnAddSave">Save
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </form>
</div>
			<!--=========================Modal delete breed start=============-->
<div id="modalbreedDelete" class="modal bottom-sheet" style="height: 250px !important; overflow:hidden;">
    <form method="post" action="{{action('BreedController@destroy')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-header orange"><h2 class="white-text">Delete</h2></div>
        <div class="modal-content">
            <div class="row">
                <div class="col s12">
                    <h3 class="center">Confirm Delete</h3>
                </div>
            </div>
            <input type="hidden" name="idDelete" id = "deleteID">
            <div class="row">
                <div class="col s3 push-s5">
                    <button input = "submit" class=" btn waves-effect waves-light red large" name="action" style="margin-left: 20px;">
                        <i class="material-icons left">delete</i>Delete
                    </button>
                </div>	
            </div>
        </div>
    </form>
        
</div>
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
    $(".buttonUpdate").click(function(){
        
        var itemID = "tableID" + this.id;
        var itemName = "tableName" + this.id;
        var itemAnimalType = "tableType" + this.id;
        
        var animalType = $("#"+itemAnimalType).html();
        $("#selectAnimalEdit option").each(function() {
            if($(this).text() == animalType) {
                $(this).attr('selected', 'selected');     
                $('select').material_select();
            }                        
        });
        
        document.getElementById('editID').value = $("#"+itemID).html();
        document.getElementById('editBreed').value = $("#"+itemName).html();

    });
});
    
$(function(){
    $(".buttonDelete").click(function(){
        document.getElementById('deleteID').value =this.id;
    });
});
</script>
@stop