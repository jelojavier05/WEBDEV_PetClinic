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
												<tr>
													<td>Monday</td>
													<td>8</td>
													<td>15</td>
												</tr>
												
												<tr>
													<td>Tuesday</td>
													<td>9</td>
													<td>18</td>
												</tr>
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

<footer class="page-footer orange accent-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">PET CLINIC PET CLINIC PET CLINIC PET CLINIC PET CLINIC</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright TeamKups
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>


@stop