@extends('admin.shared.main')
@section('title')
	Dashboard
@endsection
@section('content')
<div class="content_yield">
	<!-- HighChart -->
	<div class="col-xs-12 col-sm-8">
		<figure class="highcharts-figure">
		  <div id="high_chart"></div>
		  <p class="highcharts-description">
		    Setting the option to see a diffrent !
		  </p>
		  <div id="sliders">
		    <table>
		      <tr>
		        <td><label for="alpha">Alpha Angle</label></td>
		        <td><input id="alpha" type="range" min="0" max="45" value="15"/> <span id="alpha-value" class="value"></span></td>
		      </tr>
		      <tr>
		        <td><label for="beta">Beta Angle</label></td>
		        <td><input id="beta" type="range" min="-45" max="45" value="15"/> <span id="beta-value" class="value"></span></td>
		      </tr>
		      <tr>
		        <td><label for="depth">Depth</label></td>
		        <td><input id="depth" type="range" min="20" max="100" value="50"/> <span id="depth-value" class="value"></span></td>
		      </tr>
		    </table>
		  </div>
		</figure>
	</div>
	<!-- End HighChart -->
	<!-- Profile -->
	<div class="col-xs-12 col-sm-4">
		<div class="admin_profi">
			<div class="ava">
				<img src="{{ asset('images/mw-1.png') }}" alt="#">
			</div>
			<div class="desc">
				<div class="name">
					<h4>Admin</h4>
				</div>
				<p>Phone: 0123456789</p>
				<p>Address: lorem ipsum dolor sit amet</p>
				<p>lorem ipsum dolor sit amet</p>
			</div>
		</div>
	</div>
	<!-- End Profile -->
</div>
@endsection