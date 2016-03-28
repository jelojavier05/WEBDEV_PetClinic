@extends('master_layouts.clienthome')

@section('title')
Schedule
@endsection

@section('content')
<div style='position:absolute;z-index:-1;left:0;top:0;width:100%;height:100%'>
			<img src="{!! URL::asset('../images/petbg.jpg') !!}" style='width:100%;height:900px; opacity:0.8;' alt='[]' />
</div>
<!-- ===================== Home Content ================= -->
		<div class="container grey lighten-2" style="border-radius:15px;">
			<div class="orange lighten-2-text">
			<legend class="white-text"><h2>Schedule</h2></legend>
				<div class="container-fluid white">
					<div class="row">
						<div class="col s12">
							<h3>We're Available at these days and times</h3>
								<div class="row">
									<div class="col s6 push-s1">
										<table class="highlight white">
											<thead>
												<tr>
													<th>Day</th>
													<th>From</th>
													<th>To</th>
												</tr>
											</thead>
											
											<tbody>
												
                                                @foreach($schedules as $schedule)
                                                <tr>
													<td>{{$schedule->strDay}}</td>
													<td>{{$schedule->intFrom}}</td>
													<td>{{$schedule->intTo}}</td>
												</tr>
												@endforeach
												
											</tbody>
										</table>
									</div>
								</div>
					
						</div>
						
					</div>
				</div>
			</div>
<!--				<div class="container-fluid" style="margin:3%">-->
				
				
<!--				</div>-->
		</div>

<footer class="page-footer orange">
    <div class="container">
      <div class="row">
        
        <div class="col l3 s12">
          <h5 class="white-text">Pet Clinic</h5>
          <ul>
            <li class="white-text">Jason Andrew Paredes</li>
            <li class="white-text">Danisah Bryan Rosello</li>
			<li class="white-text">BSIT 3-1N</li>
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