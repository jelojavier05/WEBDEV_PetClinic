@extends('master_layouts.clientui')

@section('title')
Change Password
@endsection

@section('greeting')
Hello {{$userFirstName}}
@endsection

@section('content')

<!-- ===================== Home Content ================= -->
		

<div class="row">
<div class="col s12 push-s1">

    
    
        @if (session('message') == "1")
            <input type="hidden" value="1" id = "checkerID">
        @elseif (session('message') == "0")
            <input type="hidden" value="0" id = "checkerID">
        @else
            <input type="hidden" value="" id = "checkerID">
        @endif
    <div class="container grey lighten-2" style="border-radius:15px;">
        <div class="orange lighten-2-text">
            <legend class="white-text"><h2>Change Password</h2></legend>
        </div>
        <form method="post" action="{{action('ChangePasswordController@update')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">	
                <div class="col s7 push-s2" style="margin:1%;">
                    <div class="input-field col s12">
                        <input  id="password" type="password" class="validate"  required="" aria-required="true" name = "newPassword">
                        <label  for="password">New Password</label>
                    </div>
                    <div class="input-field col s12">
                        <input  id="confirmPassword" type="password" class="validate"  required="" aria-required="true" name = "confirmPassword">
                        <label  for="confirmPassword">Confirm New Password</label>
                    </div>
                    <div style="margin:2%;">
                        <button class="waves-effect waves-light btn-large orange right" type="submit">Ok<i class="material-icons right">send</i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
    <script>
        $(function(){
            var checker = $('#checkerID').val();
            if (checker == "1"){
                var toastContent = $('<span>Successful</span>');
                Materialize.toast(toastContent, 1500,'green', 'edit');
            }else if (checker == "0"){
                var toastContent = $('<span>Password dont match.</span>');
                Materialize.toast(toastContent, 1500,'red', 'edit');
            }
        });
    </script>

@stop
    
    