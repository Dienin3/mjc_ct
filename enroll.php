<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
print_r ($_POST);
include('setup.php');
$courseid = $_POST['courseid'];
$accountid = $_POST['accountid'];
$invoicedate = date("Y-m-d");
$sql = "INSERT INTO `enrollments` (`course_id`, `account_id`, `date`) VALUES ('$courseid', '$accountid', '$invoicedate')";
print $sql;

if ($conn->query($sql) === TRUE) {
<<<<<<< Updated upstream
  echo "New record created successfully";
=======
    echo "New record created successfully";
    header('Location: courses.php');
>>>>>>> Stashed changes
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="/js/javascript.js"></script>
    </head>
    
    <body>
        <?php include('components/header.php');?>
        
        
        <footer>
            <?php include('components/footer.php');?>
        </footer>
    </body>
</html>