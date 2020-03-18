<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>log-in</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
 <style type="text/css">
 	body{
 		background:linear-gradient(rgba(0, 0, 50, 0.5),rgba(0, 0, 50, 0.5)),url('https://images.pexels.com/photos/68147/waterfall-thac-dray-nur-buon-me-thuot-daklak-68147.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
 	}
    
    .login-box{
    	max-width: 700px;
    	float: none;
    	margin: 150px auto;
    }

    .login-left{
    	background: rgba(211, 211, 211, 0.5);
    	padding: 30px;
    }

   .login-right{
   	background: #fff;
   	padding: 30px;
   }


   .form-control{
   	background-color: transparent !important;
   }

 </style>
</head>
<body>
	<div class="container-fluid">
		<div class="login-box">
	   <div class="row">
	   	<div class="col-md-6 login-left">
	   		<h2>Login Here</h2>
	   		<form action="validation.php" method="post">
	   			<div class="form-group">
                  <lebel>Username</lebel>
                  <input type="text" name="user" class="form-control required">
               </div>
               <div class="form-group">
                  <lebel>Password</lebel>
                  <input type="password" name="password" class="form-control" required>
               </div>
               <button type="submit" class="btn btn-primary">login</button>
	   		
	   		</form>
               </div>

	   			<div class="col-md-6 login-right">
	   		<h2>Register Here</h2>
	   		<form action="registration.php" method="post">
	   			<div class="form-group">
                  <lebel>Username</lebel>
                  <input type="text" name="user" class="form-control required">
               </div>
               <div class="form-group">
                  <lebel>Password</lebel>
                  <input type="password" name="password" class="form-control" required>
               </div>
               <button type="submit" class="btn btn-primary">Register</button>
	   		
	   		</form>
</div>
</div>
</div>
</div>
</body>
</html>