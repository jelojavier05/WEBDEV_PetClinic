@extends('master_layouts.clienthome')

@section('title')
Main
@endsection

@section('content')


<div class="slider">
    <ul class="slides">
      <li>
        <img src="{!! URL::asset('../images/petheadline1.jpg') !!}"> <!-- random image -->
        <div class="caption center-align">
          <h3 style="color:#e65100">Hello</h3>
          <h5 class="light black-text text-lighten-3">Kamusta ka?</h5>
        </div>
      </li>
      <li>
        <img src="{!! URL::asset('../images/petheadline2.jpg') !!}"> <!-- random image -->
        <div class="caption left-align">
          <h3 style="color:#e65100">Hello Ulit</h3>
          <h5 class="light black-text text-lighten-3">Kamusta Ka Ulit</h5>
        </div>
      </li>
      <li>
        <img src="{!! URL::asset('../images/petheadline4.jpg') !!}"> <!-- random image -->
        <div class="caption right-align">
          <h3 style="color:#e65100">Hello Ulit</h3>
          <h5 class="light black-text text-lighten-3">Kamusta ka na?</h5>
        </div>
      </li>
      <li>
        <img src="{!! URL::asset('../images/petheadline5.jpg') !!}"> <!-- random image -->
        <div class="caption center-align">
          <h3 style="color:#e65100">Hi Naman</h3>
          <h5 class="light black-text text-lighten-3">How are you?</h5>
        </div>
      </li>
    </ul>
  </div>


<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center orange-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Fast and Efficient Service</h5>
			  
			  <p class="light">Test test test test test test test test test test test test test test test test test test test</p>

            
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center orange-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Recognized Doctors and Personnel</h5>
			  
			  <p class="light">Test test test test test test test test test test test test test test test test test test test</p>

            
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center orange-text"><i class="material-icons">thumb_up</i></h2>
            <h5 class="center">Customer Friendly</h5>
			  
			  <p class="light">Test test test test test test test test test test test test test test test test test test test</p>

            
          </div>
        </div>
      </div>

    </div>
  </div>




<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center orange-text text-lighten-2">Have a Pet?</h1>
        <div class="row center">
          <h5 class="header col s12 light">Let them join us</h5>
        </div>
        <div class="row center">
          <a href="/client/addpet" class="btn-large waves-effect waves-light orange lighten-1 animated infinite rubberBand">Go</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="{!! URL::asset('../images/clientpetbg.jpg') !!}"></div>
</div>


 

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Copyright 
      </div>
    </div>
  </footer>

@stop