<html>
<head>
	<title>Update Data</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="/update1" method="get" style="margin-top: 150px">
			<h1 align="center">Update Form</h1><br/>

				<input type="hidden" name="id" value="{{$o['id']}}" class="form-control" placeholder="Enter ID of Record..." style="margin-bottom: 10px" required/>
				<input type="text" name="name" class="form-control" placeholder="Enter Name..." style="margin-bottom: 10px" value="{{$o['name']}}" required/>
				<input type="text" name="designation" value="{{$o['designation']}}" class="form-control" placeholder="Enter Designation..." style="margin-bottom: 10px" required/>
				<input type="text" name="department" value="{{$o['department']}}" class="form-control" placeholder="Enter Deparment..." style="margin-bottom: 10px" required/>
				<input type="text" name="address" value="{{$o['address']}}" class="form-control" placeholder="Enter Address..." style="margin-bottom: 10px" required/>
				<input type="text" name="dob" value="{{$o['dob']}}" class="form-control" placeholder="Enter Date of Birth..." style="margin-bottom: 10px" required/>
				<input type="text" name="aadhar" value="{{$o['aadhar']}}" class="form-control" placeholder="Enter Aadhar card number..." style="margin-bottom: 10px" required/>
				<input type="text" name="bloodgroup" value="{{$o['bloodgroup']}}" class="form-control" placeholder="Enter Blood Group..." style="margin-bottom: 10px" required/>
				<input type="text" name="mobile" value="{{$o['mobile']}}" class="form-control" placeholder="Enter Mobile number..." style="margin-bottom: 10px" required/>
				<input type="text" name="email" value="{{$o['email']}}" class="form-control" placeholder="Enter Email address..." style="margin-bottom: 10px" required/>
			
				<input type="submit" name="sub" value="Update" class="btn btn-success"/>
				<a href="/display" class="btn btn-warning">Display</a>

			</form>

			
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

</body>
</html>