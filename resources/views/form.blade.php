<html>
<head>
	<title>Insert Data</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<form action="insert1" method="get" style="margin-top: 150px">
			<h1 align="center">Insert Form</h1><br/>
					<input type="text" name="name" class="form-control" placeholder="Enter Name..." style="margin-bottom: 10px" />

 @if ($errors->has('name')) <p class="help-block alert alert-danger">{{ $errors->first('name') }}</p> @endif


					<input type="text" name="designation" class="form-control" placeholder="Enter Designation..." style="margin-bottom: 10px" />
					<input type="text" name="department" class="form-control" placeholder="Enter Deparment..." style="margin-bottom: 10px" />
					<input type="text" name="address" class="form-control" placeholder="Enter Address..." style="margin-bottom: 10px" />
					<input type="text" name="dob" class="form-control" placeholder="Enter Date of Birth..." style="margin-bottom: 10px" />
					<input type="text" name="aadhar" class="form-control" placeholder="Enter Aadhar card number..." style="margin-bottom: 10px" />

 @if ($errors->has('aadhar')) <p class="help-block alert alert-danger">{{ $errors->first('aadhar') }}</p> @endif

					<input type="text" name="bloodgroup" class="form-control" placeholder="Enter Blood Group..." style="margin-bottom: 10px" />
					<input type="text" name="mobile" class="form-control" placeholder="Enter Mobile number..." style="margin-bottom: 10px" />

 @if ($errors->has('mobile')) <p class="help-block alert alert-danger">{{ $errors->first('mobile') }}</p> @endif

					<input type="text" name="email" class="form-control" placeholder="Enter Email address..." style="margin-bottom: 10px" />

 @if ($errors->has('email')) <p class="help-block alert alert-danger">{{ $errors->first('email') }}</p> @endif

					<input type="submit" name="sub" value="Insert" class="btn btn-success"/>
					<a href="/display" class="btn btn-warning">Display</a>
			</form>
			
			
			
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

</body>
</html>