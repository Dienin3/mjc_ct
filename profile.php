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
<<<<<<< Updated upstream
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
=======
    //print_r ($_SESSION);
    $name = $_SESSION['name'];
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
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
=======
						<td><?php print $name?></td>
					</tr>
    <?php     
     if ($name == "admin") {
        print 'hello admin';
    } else { ?>
                    <tr>
                        <td class="col span_3_of_3">Enrolled Courses</td>
                    </tr>
   <?php    
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $conn->prepare('SELECT id, username, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($account_id, $username, $email);
$stmt->fetch();
$stmt->close();
//$sql = "SELECT account_id, username, email
//FROM enrollments
//INNER JOIN accounts ON accounts.id=enrollments.account_id";

    $sql = "Select * from enrollments WHERE account_id = '$account_id'";
    $result = $conn->query($sql);

if ($result->num_rows >= 0) {
  // output data of each row
     while ($row = $result->fetch_assoc()) {
    
            $course_id = $row["course_id"];
            $sql = "Select * from courses WHERE id = '$course_id'";
            $result2 = $conn->query($sql);
            $row2 = $result2->fetch_assoc();
            $title = $row2["title"]; ?>
                    <tr>
						<td class="col span_3_of_3"><?php print $course_id;?>) </td>
						<td><?php print $title;?></td>
					</tr>
 <?php   } 
    }   
}
    ?>    
                    
>>>>>>> Stashed changes
                    
				</table>
			</div>
		</div>
            <footer>
                <?php include('components/footer.php');?>
            </footer>
    </body>
</html>