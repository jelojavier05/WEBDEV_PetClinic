@extends('master_layouts.home')

@section('title')
Main
@endsection

@section('content')

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center orange-text text-lighten-2">Pet Clinic</h1>
        <div class="row center">
          <h5 class="header col s12 light">Pet Clinic Website</h5>
        </div>
        <div class="row center">
          <a href="/account/register" class="btn-large waves-effect waves-light orange lighten-1 animated infinite rubberBand">Join</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="{!! URL::asset('../images/petbg.jpg') !!}"></div>
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


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h4 class="header col s12 light orange-text">Taking Care of Man's Beloved Companion</h4>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{!! URL::asset('../images/pet2.jpg') !!}"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Connect with us</h4>
          <p class="center light">hello@yahoo.com</p>
		  <p class="center light">09123456789</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h4 class="header col s12 light orange-text">Offering High Quality Service to your pets</h4>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{!! URL::asset('../images/pet4.jpg') !!}"></div>
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
