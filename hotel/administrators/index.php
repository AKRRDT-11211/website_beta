<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8">	
</head>


<title>
	Employee-Section
</title>

<body style="background-color: #0D47A1;">

	<div class="row">

		<div class="col-md-3"></div>
		<div class="col-md-6">
			
		<div>
			
			<div>

				<form action="authenticate.php" style="margin-top: 20%; font-size: 20px; background-color: #90CAF9; padding-top: 6%; padding-left: 5%; padding-right: 5%; padding-bottom: 6%; border-radius: 20px;">
					
					<div style="font-size: 45px; text-align: center;margin-top: 10px; margin-bottom: 30px;">
						<b><i>Authenticate Your-Self</i></b>
					</div>

					<div>
						<div style="margin: 10px; padding-top: 20px; padding-bottom: 20px; padding-left: 40px; padding-right: 40px; background-color: #FFFFFF; border-radius: 20px;">
							<label><b><i>Username</i></b></label>
							<br>
	    					<input type="text" placeholder="Enter Username" name="user_name" required style="width: 100%; border-radius: 15px; text-align: center;">
						</div>

						<div style="margin: 10px; padding-top: 20px; padding-bottom: 20px; padding-left: 40px; padding-right: 40px; background-color: #FFFFFF; border-radius: 20px;">
						    <label><b><i>Password</i></b></label>
						    <br>
    						<input type="password" placeholder="Enter Password" name="password" required type="text" placeholder="Enter Username" name="user_name" required style="width: 100%; border-radius: 15px; text-align: center;">
        				</div>

					    <div class="row" style="margin: 0px; padding-top: 40px; padding-bottom: 20px; padding-left: 0px; padding-right: 0px; ">
					    	<div class="col-md-6">
					    		<button type="submit" style="width: 100%; text-align: center; height: 60px; border-radius: 20px;"><b>Login</b></button>
							</div>
							<div class="col-md-6">
		    					<button type="reset" style="width: 100%; text-align: center; height: 60px; border-radius: 20px;"><b>Reset</b></button>
							</div>
				    	</div>
  					</div>

  				</form>

			</div>

		</div>

		</div>
		<div class="col-md-3"></div>

	</div>

</body>
</html>