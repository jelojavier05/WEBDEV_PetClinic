@extends('master_layouts.maintenance')

@section('title')
Grooming Service
@endsection

@section('content')

                    <!-- ============== background image =============== -->
<div style='position:absolute;z-index:-1;left:0;top:0;width:100%;height:100%'>
    <div class="parallax">
        <img src="{!! URL::asset('../images/pet4.jpg') !!}" style='width:100%;height:900px; opacity:0.8;' alt='[]' />
    </div>
</div>
                    <!-- =================TABLE ADD groomservice START ======================-->
<div class="row">
    <div class="col s12 push-s1">
        <div class="container grey lighten-2 z-depth-2" style="border-radius: 10px; margin-top:40px;">
            <div class="row">
                <div class="col s6 push-s1">
                <h2 class="orange-text">Grooming Service</h2>
                </div>

                <div class="col s3 offset-s2">
                    <button style="margin-top: 30px;" id="btnAdd" class=" z-depth-2 btn-large green modal-trigger" href="#modaladdGrooming">
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
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                        </thead>

                        <tbody>
                           @foreach($groomservices as $groomservice) 
                                <tr>
                                    <td>
                                        <button class="buttonUpdate btn modal-trigger"  name="" id="{{$groomservice->intGroomServiceID}}" href="#modalgroomingserviceEdit" >
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <label for="{{$groomservice->intGroomServiceID}}"></label>
                                    </td>

                                    <td>
                                        <button class="buttonDelete btn red modal-trigger" id = "{{$groomservice->intGroomServiceID}}" href="#modalgroomingserviceDelete">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                    <td id = "tableID{{$groomservice->intGroomServiceID}}">{{$groomservice->intGroomServiceID}}</td>
                                    <td id = "tableName{{$groomservice->intGroomServiceID}}">{{$groomservice->strGroomService}}</td>
                                    <td id = "tableDescription{{$groomservice->intGroomServiceID}}">{{$groomservice->strDescription}}</td>
                                    <td id = "tablePrice{{$groomservice->intGroomServiceID}}">{{$groomservice->fltPrice}}</td>
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

                    <!-- ========================Modal Grooming ADD ============-->
<div id="modaladdGrooming" class="modal modal-fixed-footer" style="overflow:hidden;">
    <form method="post" action = "{{action('GroomServiceController@store')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-header orange"><h2 class="white-text">Add Grooming Service</h2></div>
        <div class="modal-content">

            <div class="row">
                <div class="col s5">
                    <div class="input-field">
                        <input id="strServiceName" type="text" class="validate" name = "nameAdd" required="" aria-required="true">
                        <label for="strGroomingName">Grooming Service Name</label> 
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s5">
                    <div class="input-field">
                        <input id="strdescName" type="text" class="validate" name = "descriptionAdd" required="" aria-required="true">
                        <label for="strdescName">Grooming Service Description</label> 
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s5">
                    <div class="input-field">
                        <input id="intgroomPrice" type="text" class="validate" pattern="[0-9.][^A-za-z ]{1,}" name = "priceAdd" required="" aria-required="true">
                        <label for="intgroomPrice">Price</label> 
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
                    <!-- ========================Modal Grooming Update ============-->
<div id="modalgroomingserviceEdit" class="modal modal-fixed-footer" style="overflow:hidden;">
    <form method="post" action = "{{action('GroomServiceController@update')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-header orange"><h2 class="white-text">Add Grooming Service</h2></div>
        <div class="modal-content">

            <div class="row">
                <div class="col s8">
                    <div class="input-field">
                        <input  id="editIDModal" type="text" class="validate" name = "idEdit" readonly value =" ">
                        <label for="editIDModal">Grooming Service ID</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s5">
                    <div class="input-field">
                        <input id="editNameModal" value =" " type="text" class="validate" name = "nameEdit" required="" aria-required="true">
                        <label for="editNameModal">Grooming Service Name</label> 
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s5">
                    <div class="input-field">
                        <input id="editDescriptionModal" value =" " type="text" class="validate" name = "descriptionEdit" required="" aria-required="true">
                        <label for="editDescriptionModal">Grooming Service Description</label> 
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s5">
                    <div class="input-field">
                        <input id="editPriceModal" value =" " type="text" class="validate" pattern="[0-9.][^A-za-z ]{1,}" name = "priceEdit" required="" aria-required="true">
                        <label for="editPriceModal">Price</label> 
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

			<!--=========================Modal delete groom service start=============-->
<div id="modalgroomingserviceDelete" class="modal bottom-sheet" style="height: 250px !important; overflow:hidden;">
    <form method="post" action = "{{action('GroomServiceController@destroy')}}">
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