<html>
<head>
	<title>Display Data</title>
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
</head>
<body>

<div class="container">
	<table class="table table-responsive table-striped" style="margin-top: 100px">
		<tr>
			<td>Name</td>
			<td>Designation</td>
			<td>Department</td>
			<td>Address</td>
			<td>Date of Birth</td>
			<td>Aadhar Card</td>
			<td>Blood Group</td>
			<td>Mobile no.</td>
			<td>Email Address</td>
			<td>Update</td>
			<td>Delete</td>
		</tr>
		@foreach ($o as $r)
		<tr>
			<td>{{$r['name']}}</td>
			<td>{{$r['designation']}}</td>
			<td>{{$r['department']}}</td>
			<td>{{$r['address']}}</td>
			<td>{{$r['dob']}}</td>
			<td>{{$r['aadhar']}}</td>
			<td>{{$r['bloodgroup']}}</td>
			<td>{{$r['mobile']}}</td>
			<td>{{$r['email']}}</td>
			<td><a href="/update/{{$r['id']}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
			<td><a href="/delete/{{$r['id']}}">Delete</a></td>
		</tr>
		@endforeach
	</table>
	<a href="/insert" class="btn btn-default">Insert Data</a>
</div>

</body>
</html>