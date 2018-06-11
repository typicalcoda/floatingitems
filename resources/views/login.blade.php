<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<form action="login" method="post">
	<h3>Please login</h3>
	{{ csrf_field() }}
	<label for="">Username</label>
	<input type="text" name="username"><br>
	<label for="">Password</label>
	<input type="password" name="password"><br>
	<button type="submit">Login</button><br>

</form>

</body>
</html>