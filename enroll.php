<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
print_r($_POST);
include 'setup.php';
$courseid = $_POST['courseid'];
$accountid = $_POST['accountid'];
$invoicedate = date("Y-m-d");
$sql = "INSERT INTO `enrollments` (`course_id`, `account_id`, `date`) VALUES ('$courseid', '$accountid', '$invoicedate')";
print $sql;

if ($conn->query($sql) === true) {
    echo "New record created successfully";
    header('Location: courses.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
