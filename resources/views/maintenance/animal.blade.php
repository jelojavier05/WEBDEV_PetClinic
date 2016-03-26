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
    <div class="col s12 push-s1">
        <div class="container grey lighten-2 z-depth-2" style="border-radius: 10px; margin-top:40px;">
            <div class="row">
                <div class="col s5 push-s1">
                    <h2 class="orange-text">Animal Species</h2>
                </div>

                <div class="col s3 offset-s3">
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
                            @foreach ($animals as $animal)

                            <tr>
                                <td><button class="buttonUpdate btn modal-trigger"  name="" id="{{$animal->intAnimalID}}" href="#modalanimalEdit" ><i class="material-icons">edit</i></button>
                                <label for="{{$animal->intAnimalID}}"></label></td>

                                <td><button class="btn red modal-trigger" id="delete" href="#modalanimalDelete"><i class="material-icons">delete</i></button></td>
                                <td id = "tableID{{$animal->intAnimalID}}"> {{$animal->intAnimalID}} </td>
                                <td id = "tableName{{$animal->intAnimalID}}"> {{$animal->strAnimalName}} </td>

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
    
    <!-- ==========================checking in database===================-->
    @if (session('message') == "Record Added.")
        <input type="hidden" value="Record Added." id = "checkerID">
    @elseif (session('message') == "Record Updated.")
        <input type="hidden" value="Record Updated." id = "checkerID">
    @elseif (session('message') == "Record Exist.")
        <input type="hidden" value="Record Exist." id = "checkerID">
    @else
        <input type="hidden" value="" id = "checkerID">
    @endif
    <!-- ==========================checking in database end===================-->

	<!-- ==================modal pet add====================-->			
	<div id="modaladdPet" class="modal modal-fixed-footer" style="overflow:hidden;">

        <form method="post" action="{{action('AnimalController@store')}}">
            <div class="modal-header orange"><h2 class="white-text">Add Animal Species</h2></div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">	
            <div class="modal-content">
                <div class="row">
                    <div class="col s8">
                        <div class="input-field">
                            <input  id="PetIDAdd" type="text" class="validate" name = "" disabled>
                                <label for="PetIDAdd">Animal Species ID</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s5">
                        <div class="input-field">
                            <input id="PetNameAdd" type="text" class="validate" name = "animal" required="" aria-required="true">
                                <label for="PetNameAdd">Animal Species Name</label> 
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
			<!--=========================Modal add pet end=============-->
            
            <!-- ==================modal pet update====================-->			
	<div id="modalanimalEdit" class="modal modal-fixed-footer" style="overflow:hidden;">
        <form method="post" action="{{action('AnimalController@update')}}">
            <div class="modal-header orange"><h2 class="white-text">Update Animal Species</h2></div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-content">
                <div class="row">
                    <div class="col s8">
                        <div class="input-field">
                            <input  id="editIDModal" type="text" class="validate" name = "idEdit" value="test" readonly>
                                <label class="active"  for="PetNameEdit">Animal Species ID</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s5">
                        <div class="input-field">
                            <input id="editNameModal" type="text" class="validate" name = "nameEdit" required="" aria-required="true" value="test">
                                <label class="active" for="strpetName">Animal Species Name</label> 
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button input = "submit" class="btn waves-effect waves-light" name="action" style="margin-right: 30px;" id = "btnEditSave">Save
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
			<!--=========================Modal update pet end=============-->

			<!--=========================Modal delete animal start=============-->
		<div id="modalanimalDelete" class="modal bottom-sheet" style="height: 250px !important; overflow:hidden;">
        	<div class="modal-header orange"><h2 class="white-text">Delete</h2></div>
				<div class="modal-content">

						<div class="row">
							<div class="col s12">
								<h3 class="center">Confirm Delete</h3>
							</div>
						</div>



		<!-- Modal Button Delete -->

			<div class="row">
				<div class="col s3 push-s5">
					<button class=" btn waves-effect waves-light red large" name="action" style="margin-left: 20px;"><i class="material-icons left">delete</i>Delete</button>

				</div>	
			</div>

				</div>
<!--				 </form> -->
		</div>
			<!--=========================Modal delete animal end=============-->

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
        if (checker == "Record Added."){
            var toastContent = $('<span>Record Added.</span>');
            Materialize.toast(toastContent, 1500,'green', 'edit');
        }else if(checker == "Record Updated."){
            var toastContent = $('<span>Record Updated.</span>');
            Materialize.toast(toastContent, 1500,'green', 'edit');
        }else if(checker == "Record Exist."){
            var toastContent = $('<span>Record Exist.</span>');
            Materialize.toast(toastContent, 1500,'red', 'edit');
        }
    });
    
    $(function(){
        $(".buttonUpdate").click(function(){


			var itemID = "tableID" + this.id;
			var itemName = "tableName" + this.id;

			document.getElementById('editIDModal').value = $("#"+itemID).html();
			document.getElementById('editNameModal').value = $("#"+itemName).html();

		});
    });
    
    $(function(){
        $(".buttonDelete").click(function(){
            alert($("#"+itemID).html());
		});
    });
    
    
</script>
@stop


