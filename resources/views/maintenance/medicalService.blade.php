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
                <!-- =================TABLE ADD med Service START ======================-->
  <div class="row">
    <div class="col s12 push-s1">
        <div class="container grey lighten-2 z-depth-2" style="border-radius: 10px; margin-top:40px;">
            <div class="row">
            <div class="col s6 push-s1">
            <h2 class="orange-text">Medical Service</h2>
            </div>

            <div class="col s3 offset-s2">
            <button style="margin-top: 30px;" id="btnAdd" class=" z-depth-2 btn-large green modal-trigger" href="#modaladdService"><i class="material-icons left">add</i> ADD</button>
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
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($medicalservices as $medicalservice)
                                <tr>
                                    <td>
                                        <button class="buttonUpdate btn modal-trigger"  name="" id="{{$medicalservice->intMedicalServiceID}}" href="#modalmedicalserviceEdit" >
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <label for="{{$medicalservice->intMedicalServiceID}}"></label>
                                    </td>

                                    <td>
                                        <button class="buttonDelete btn red modal-trigger" id="{{$medicalservice->intMedicalServiceID}}" href="#modalmedserviceDelete">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                    <td id = "tableID{{$medicalservice->intMedicalServiceID}}">{{$medicalservice->intMedicalServiceID}}</td>
                                    <td id = "tableName{{$medicalservice->intMedicalServiceID}}">{{$medicalservice->strMedicalService}}</td>
                                    <td id = "tableDescription{{$medicalservice->intMedicalServiceID}}">{{$medicalservice->strDescription}}</td>
                                    <td id = "tablePrice{{$medicalservice->intMedicalServiceID}}">{{$medicalservice->fltPrice}}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
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
                <!-- ========================== Modal Medical Service ADD ===================-->
    <div id="modaladdService" class="modal modal-fixed-footer" style="overflow:hidden;">
        <form method="post" action="{{action('MedicalServiceController@store')}}">
            <div class="modal-header orange"><h2 class="white-text">Add Medical Service</h2></div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-content">
                <div class="row">
                    <div class="col s5">
                        <div class="input-field">
                            <input id="strServiceName" type="text" class="validate" name = "medicalServiceAdd" required="" aria-required="true">
                            <label for="strServiceName">Medical Service Name</label> 
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s5">
                        <div class="input-field">
                            <input id="strdescName" type="text" class="validate" name = "descriptionAdd" required="" aria-required="true">
                            <label for="strdescName">Medical Service Description</label> 
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s5">
                        <div class="input-field">
                            <input id="intmedPrice" type="text" class="validate" pattern="[0-9.][^A-za-z ]{1,}" name = "priceAdd" required="" aria-required="true">
                            <label for="intmedPrice">Price</label> 
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
            <!-- ========================== Modal Medical Service update ===================-->
    <div id="modalmedicalserviceEdit" class="modal modal-fixed-footer" style="overflow:hidden;">
        <form method="post" action="{{action('MedicalServiceController@update')}}">
            <div class="modal-header orange"><h2 class="white-text">Update Medical Service</h2></div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-content">

                <div class="row">
                    <div class="col s8">
                        <div class="input-field">
                            <input  id="editIDModal" type="text" class="validate" name = "idEdit" readonly value =" ">
                            <label for="editIDModal">Medical Service ID</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s5">
                        <div class="input-field">
                            <input id="editNameModal" type="text" class="validate" name = "nameEdit" required="" aria-required="true" value =" ">
                            <label for="strServiceName">Medical Service Name</label> 
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s5">
                        <div class="input-field">
                            <input id="editDescriptionModal" type="text" class="validate" name = "descriptionEdit" required="" aria-required="true" value =" ">
                            <label for="strdescName">Medical Service Description</label> 
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s5">
                        <div class="input-field">
                            <input id="editPriceModal" type="text" class="validate" pattern="[0-9.][^A-za-z ]{1,}" name = "priceEdit" required="" aria-required="true" value =" ">
                            <label for="intmedPrice">Price</label> 
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn waves-effect waves-light" name="action" style="margin-right: 30px;" id = "btnEditSave">Save
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
    </div>

<!--=========================Modal delete med service start=============-->
    <div id="modalmedserviceDelete" class="modal bottom-sheet" style="height: 250px !important; overflow:hidden;">
        <form method="post" action="{{action('MedicalServiceController@destroy')}}">
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
            var itemDescription = "tableDescription" + this.id;
            var itemPrice = "tablePrice" + this.id;

			document.getElementById('editIDModal').value = $("#"+itemID).html();
			document.getElementById('editNameModal').value = $("#"+itemName).html();
            document.getElementById('editDescriptionModal').value = $("#"+itemDescription).html();
            document.getElementById('editPriceModal').value = $("#"+itemPrice).html();

		});
    });
    
    $(function(){
        $(".buttonDelete").click(function(){
            document.getElementById('deleteID').value =this.id;
		});
    });

</script>
@stop