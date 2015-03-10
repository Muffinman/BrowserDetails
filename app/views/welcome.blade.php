@extends('layouts.default')
@section('content')

<h2 class="text-centre">Browser Details</h2>

<p class="text-centre">We have collected the following information about your system.</p>


<div class="text-centre">

	<table cellpadding="0" cellspacing="0" class="stats-table">
		<tbody>
			<tr>
				<th>Operating System</th>
				<td class="operating-system"></td>
			</tr>
			<tr>
				<th>Browser name</th>
				<td class="browser-name"></td>
			</tr>
			<tr>
				<th>Browser version</th>
				<td class="browser-version"></td>
			</tr>
			<tr>
				<th>IP Address</th>
				<td class="ip-address">{{ $ipaddress }}</td>
			</tr>
			<tr>
				<th>Proxy</th>
				<td class="proxy">{{ $proxy }}</td>
			</tr>
			<tr>
				<th>ISP</th>
				<td class="isp">{{ $isp }}</td>
			</tr>
			<tr>
				<th>Javascript</th>
				<td class="javascript">Off</td>
			</tr>
			<tr>
				<th>Cookies</th>
				<td class="cookies"></td>
			</tr>
			<tr>
				<th>Flash Version</th>
				<td class="flash-version"></td>
			</tr>
			<tr>
				<th>Screen Resolution</th>
				<td class="screen-resolution"></td>
			</tr>
			<tr>
				<th>Browser Size</th>
				<td class="browser-size"></td>
			</tr>
			<tr>
				<th>Canvas support</th>
				<td class="canvas"></td>
			</tr>
			<tr>
				<th>WebGL support</th>
				<td class="webgl"></td>
			</tr>
			<tr>
				<th>WebSocket support</th>
				<td class="websockets"></td>
			</tr>
		</tbody>
	</table>

</div>


<form action="" method="post" class="well data-form">

	<div class="cols-container">
		<div class="cols-half">
			<input type="text" value="{{ $name }}" id="name" name="name" placeholder="Your name" data-button="submit_btn">
		</div>
		<div class="cols-half">
			<input type="email" value="{{ $email }}" id="email" name="email" placeholder="Your email address" data-button="submit_btn">
		</div>
	</div>
	<p class="text-centre">
		<input type="hidden" name="browser-data" class="browser-data" value="">
		<input type="submit" value="Send data to {{ $company }}" id="submit_btn">
	</p>

</form>

@stop
