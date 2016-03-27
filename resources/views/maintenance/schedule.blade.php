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
<!-- =================TABLE ADD schedule START ======================-->
<div class="row">
    <div class="col s12 push-s1">
        <div class="container grey lighten-2 z-depth-2" style="border-radius: 10px;  margin-top:40px;">
            <div class="row">
                <div class="col s4 push-s1">
                    <h2 class="orange-text">Schedule</h2>
                </div>
                <div class="col s3 offset-s4">
                    <button style="margin-top: 30px;" id="btnAdd" class=" z-depth-2 btn-large green modal-trigger" href="#modaladdSchedule">
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
                                <th>Day</th>
                                <th>From</th>
                                <th></th>
                                <th>To</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schedules as $schedule)
                                <tr>
                                    <td>
                                        <button class="buttonUpdate btn modal-trigger"  name="" id="{{$schedule->intScheduleID}}" href="#modalscheduleEdit" >
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <label for="{{$schedule->intScheduleID}}"></label>
                                    </td>
                                    <td>
                                        <button class="buttonDelete btn red modal-trigger" id="{{$schedule->intScheduleID}}" href="#modalscheduleDelete">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                    <td id = "tableID{{$schedule->intScheduleID}}">{{$schedule->intScheduleID}}</td>
                                    <td id = "tableDay{{$schedule->intScheduleID}}">{{$schedule->strDay}}</td>
                                    <td id = "tableFrom{{$schedule->intScheduleID}}">{{$schedule->intFrom}}</td>
                                    <td id = "tableID{{$schedule->intScheduleID}}"></td>
                                    <td id = "tableTo{{$schedule->intScheduleID}}">{{$schedule->intTo}}</td>
                                    <td id = "tableID{{$schedule->intScheduleID}}"></td>
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
    <!-- ==========================checking in database end===================-->

<!--============================ modal schedule add ===================-->
<div id="modaladdSchedule" class="modal modal-fixed-footer" style="overflow:hidden; width:500px !important;">
    <form method="post" action="{{action('ScheduleController@store')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-header orange"><h2 class="white-text">Add Schedule</h2></div>
        <div class="modal-content">
            <div class="row">
                <div class="col s8" style="margin-top:-20px;">
                    <div>
                        <label for="strDay">Day</label> 
                        <select name = "dayAdd">
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
                    <label for="intFromtime">From</label>
                    <input  id="intFromtime" type="number" min="1" max="24" class="validate" name = "fromAdd">
                </div>
                <div class="col s5">
                    <label for="intTotime">To</label>
                    <input  id="intTotime" type="number" min="1" max="24" class="validate" name = "toAdd">
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
<!--============================ modal schedule update ===================-->
<div id="modalscheduleEdit" class="modal modal-fixed-footer" style="overflow:hidden; width:500px !important;">
    <form method="post" action="{{action('ScheduleController@update')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-header orange"><h2 class="white-text">Update Schedule</h2></div>
        <div class="modal-content">
            <input id = "editIDModal" type="hidden" name="idEdit" value=" ">
            <div class="row">
                <div class="col s5" style="margin-top:-20px;">
                    <div>
                        <label for="strDay">Day</label> 
                        <select id = "selectDay" name = "dayEdit">
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
                <div class="col s2">
                    <label for="editFromModal">From</label>
                    <input  id="editFromModal" type="number" min="1" max="24" class="validate" name = "fromEdit">
                </div>
                <div class="col s2">
                    <label for="editToModal">To</label>
                    <input  id="editToModal" type="number" min="1" max="24" class="validate" name = "toEdit">
                </div>
            </div>
            <div class="modal-footer">
                <button input ="submit" class="btn waves-effect waves-light" name="action" style="margin-right: 30px;" id = "btnAddSave">Save
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </form>
</div>
<!--=========================Modal delete med service start=============-->
<div id="modalscheduleDelete" class="modal bottom-sheet" style="height: 250px !important; overflow:hidden;">
    <form method="post" action="{{action('ScheduleController@destroy')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-header orange"><h2 class="white-text">Delete</h2></div>
        <div class="modal-content">
            <div class="row">
                <div class="col s12">
                    <h3 class="center">Confirm Delete</h3>
                </div>
            </div>
            <input id = "deleteID" type="hidden" name="idDelete" value="">
            <div class="row">
                <div class="col s3 push-s5">
                    <button class=" btn waves-effect waves-light red large" name="action" style="margin-left: 20px;">  
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
			var itemName = "tableDay" + this.id;
            var itemFrom = "tableFrom" + this.id;
            var itemTo = "tableTo" + this.id;
            
            var day = $("#"+itemName).html();
            $("#selectDay option").each(function() {
                if($(this).text() == day) {
                    $(this).attr('selected', 'selected');     
                    $('select').material_select();
                }                        
            });
            
			document.getElementById('editIDModal').value = $("#"+itemID).html();
            document.getElementById('editFromModal').value = $("#"+itemFrom).html();
            document.getElementById('editToModal').value = $("#"+itemTo).html();
		});
    });
    
    $(function(){
        $(".buttonDelete").click(function(){
            document.getElementById('deleteID').value =this.id;
		});
    });
</script>
@stop