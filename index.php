<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8" name "viewport" content = "width-device=width, initial-scale=1"/>
		<title>OOP PHP Registrarion and Login Form Using MySQLi</title>
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
	</head>
<body background="cute.jpg" style="background-size:cover;">
	<nav class = "navbar navbar-default">
		<div class = "container-fluid">
	</a>		
	</div>
		</nav>
		<div class = "row" style = "margin-top:10%;">
			<div class = "col-md-4">
			</div>
			<div class = "col-md-4 well" style="background:rgba(255,255,255,0.5);">
				<h4 class = "text-danger">OOP PHP Registration and Login Form Using MySQLi</h4>
				<hr style = "border-top:1px dotted #000;"/>
				<form method = "POST" action = "save_query.php">
					<div class="form-group">
						<input type = "text" placeholder = "Username"  name = "username" class = "form-control"/>
					</div><p>
					<div class="form-group">
						<input type = "password" placeholder = "Password"  name = "password" class = "form-control">
					</div><p>
					<div class="form-group">
						<input type = "text" placeholder = "Firstname"  name = "firstname" class = "form-control"/>
					</div><p>
					<div class="form-group">
						<input type = "text" placeholder = "Lastname"  name = "lastname" class = "form-control"/>
					</div><p>
					<button class = "btn btn-success" name = "signup"><span class = "glyphicon glyphicon-log-in"></span> Sign up</button>
				</form>
		</div>
	</div>
</body>
</html>