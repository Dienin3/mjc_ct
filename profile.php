<html lang="en">
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login/login.php');
	exit;
}
include('setup.php');
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $conn->prepare('SELECT id, username, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($id, $username, $email);
$stmt->fetch();
$stmt->close();

$stmt = $conn->prepare('SELECT courseid FROM enrollments WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($courseid);
$stmt->fetch();
$stmt->close();
?>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" />
        <link href="login/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <script type="text/javascript" src="/js/javascript.js"></script>
    </head>
    
    <body>
        <?php include('components/header.php');?>
            <div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td class="col span_1_of_3">Username:</td>
						<td class="col span_2_of_3_v2"><?=$username?></td>
					</tr>
					<tr>
						<td class="col span_1_of_3">Email:</td>
						<td class="col span_2_of_3_v2"><?=$email?></td>
					</tr>
                    <tr>
						<td class="col span_1_of_3">Course:</td>
						<td class="col span_2_of_3_v2"><?=$courseid?></td>
					</tr>
                    
				</table>
			</div>
		</div>
            <footer>
                <?php include('components/footer.php');?>
            </footer>
    </body>
</html>