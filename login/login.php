<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
        <link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
        <?php include('../components/header.php');?>
		<div class="login">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
                
                <p class="logthing">New User? <a href="register_form.php">Register</a></p>
                
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
    <footer>
        <?php include('../components/footer.php');?>
    </footer>
</html>