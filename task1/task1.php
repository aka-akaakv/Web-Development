<!DOCTYPE html>
<html>

<head>
	<title>Task 1</title>
	<script src="../sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../sweetalert/dist/sweetalert.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>

	<h1>Enter your deatils.</h1>
	<form method="post" name="form1" id="form1" onsubmit="return Validate();" action="task1out.php">
		<div class="form-group">
			<label for="name">First Name:</label>
			<input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
		</div>
		
		<div class="form-group">
			<label for="name">Last Name:</label>
			<input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
		</div>
		
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="text" class="form-control" name="email" id="email" placeholder="email">
		</div>

		<div class="form-group">
			<label for="mobile">Mobile No:</label>
			<input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile">
		</div>

		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
		</div>

		<div class="form-group">
			<label for="conpassword">Password:</label>
			<input type="password" class="form-control" name="conpass" id="conpass" placeholder="Confirm Password">
		</div>
		
		<button type="submit" class="btn btn-default" name="submit">Submit</button>
	</form>

<script>

	function ValidateFName()  
	{  		
		var inputText = $("#fname").val();
		if(!!inputText.trim())
		{			
			return true;
		}
		else
		{
			swal({
				title: "Error!",
  				text: "Please enter your First Name!",
  				type: "error",
  				confirmButtonText: "Okay"
			});
			//document.form1.fname.focus();
			return false;  
		}  
	}

	function ValidateLName()  
	{  		
		var inputText = $("#lname").val();
		if(!!inputText.trim())
		{
			return true;
		}
		else
		{
			swal({
				title: "Error!",
  				text: "Please enter your Last Name!",
  				type: "error",
  				confirmButtonText: "Okay"
			});
			//document.form1.lname.focus();  
			return false;  
		}  
	}

	function ValidateEmail()  
	{  
		var inputText = $("#email").val();
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
		if(!!inputText.trim() && inputText.match(mailformat))  
		{  
			return true;  
		}  
		else  
		{  
			swal({
				title: "Error!",
  				text: "Please enter email in correct format!",
  				type: "error",
  				confirmButtonText: "Okay"
			});
			//document.form1.email.focus();
			return false;  
		}  
	}

	function ValidateMobile()
	{
		var inputText = $("#mobile").val();
		if (!!inputText.trim() && /^\d{10}$/.test(inputText))
		{
    		return true;
		}
		else 
		{
    		swal({
				title: "Error!",
  				text: "Please enter correct mobile number!",
  				type: "error",
  				confirmButtonText: "Okay"
			});
    		//document.form1.mobile.focus();
    		return false;
		}
	}

	function ValidatePass()
	{
		var inputText = $("#pass").val();
		if (!!inputText.trim() && inputText.length >= 6)
		{
    		return true;
		}
		else 
		{
    		swal({
				title: "Error!",
  				text: "Please enter atleast 6 characters in Password!",
  				type: "error",
  				confirmButtonText: "Okay"
			});
    		//document.form1.pass.focus();
    		return false;
		}
	}

	function ValidateConPass()
	{
		var inputText1 = $("#pass").val();
		var inputText2 = $("#conpass").val();
		if (!!inputText1.trim() && !!inputText2.trim() && inputText2.localeCompare(inputText1) == 0)
		{
    		return true;
		}
		else 
		{
    		swal({
				title: "Error!",
  				text: "Your Passwords do not match!",
  				type: "error",
  				confirmButtonText: "Okay"
			});
    		//document.form1.conpass.focus();
    		return false;
		}
	}

	function Validate()
	{
		if( ValidateFName() && ValidateLName() && ValidateEmail() && ValidateMobile() && ValidatePass() && ValidateConPass())
		{
			return true;
		}

		return false;
	}

</script>


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>		