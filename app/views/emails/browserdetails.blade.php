<div style="font-family:sans-serif; font-size:11pt;">
	<h1>Browser details</h1>
	<p>The following browser details have just been submitted.</p>
	<table cellspacing="0" cellpadding="10" width="100%" style="background:#F6F6F6; border:1px solid #EEEEEE; font-size:11pt;">
		<tr>
			<th><strong>OS</strong></th>
			<td>{{ $data['os'] }} {{ $data['osVersion'] }}</td>
		</tr>
		<tr>
			<th>Browser name</th>
			<td>{{ $data['browser'] }}</td>
		</tr>
		<tr>
			<th>Browser version</th>
			<td>{{ $data['browserVersion'] }}</td>
		</tr>
		<tr>
			<th>IP Address</th>
			<td>{{ $ipaddress }}</td>
		</tr>
		<tr>
			<th>Proxy</th>
			<td>{{ $proxy }}</td>
		</tr>
		<tr>
			<th>ISP</th>
			<td>{{ $isp }}</td>
		</tr>
		<tr>
			<th>Javascript</th>
			<td>{{ $data['javascript'] }}</td>
		</tr>
		<tr>
			<th>Cookies</th>
			<td>{{ $data['cookies'] }}</td>
		</tr>
		<tr>
			<th>Flash Version</th>
			<td>{{ $data['flashVersion'] }}</td>
		</tr>
		<tr>
			<th>Screen Resolution</th>
			<td>{{ $data['screenSize'] }}</td>
		</tr>
		<tr>
			<th>Browser Size</th>
			<td>{{ $data['windowSize'] }}</td>
		</tr>
		<tr>
			<th>Canvas support</th>
			<td>{{ $data['canvas'] }}</td>
		</tr>
		<tr>
			<th>WebGL support</th>
			<td>{{ $data['webGL'] }}</td>
		</tr>
		<tr>
			<th>WebSocket support</th>
			<td>{{ $data['webSockets'] }}</td>
		</tr>

	</table>
</div>