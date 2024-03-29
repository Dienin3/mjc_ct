<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
         <link href="../css/style.css" rel="stylesheet" type="text/css">
        <link href="../css/formstyle.css" rel="stylesheet" type="text/css">
	</head>
	<body>
        <?php include '../components/header.php'; ?>
		<div class="register">
			<h1>Register</h1>
			<form action="register.php" method="post" autocomplete="off">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<label for="email">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>
                <p class="logLink">Already have an account? <a href="login.php">Login</a></p>
                
				<input type="submit" value="Register">
			</form>
		</div>
        <footer>
        <?php include '../components/footer.php'; ?>    
        </footer>    
	</body>
</html>