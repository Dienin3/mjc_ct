<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
?>
<!DOCTYPE html>

<?php //print_r($_GET);
$courseid = $_GET['courseid'];
//print $courseid;
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="/js/javascript.js"></script>
    </head>
<?php
include 'setup.php';
$sql = "Select * from courses where id='$courseid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $title = $row["title"];
        $objectives = $row["objectives"];
        $img = $row["img"];
        $description = $row["description"];
        $requisites = $row["prereq"];
    }
} else {
    echo "0 results";
}


?>
    
    <body>
        <?php include 'components/header.php'; ?>
        <div class="section">
                <div class="col span_2_of_3">
                    <h1><?php print $id; ?>) <?php print $title; ?></h1><br>
                    <h3>Description:</h3>
                        <?php print $description; ?>
                </div>
                <div class="col span_1_of_4"> 
                    <img alt="<?php print $title; ?>" class="home-img" src="images/<?php print $img; ?>">
                </div>
                <div class="col span_2_of_3">
                    <h3>Objectives:</h3>
                    <?php print $objectives; ?>
                </div>
                <div class="col span_2_of_3">
                    <h3>Pre-Requisites:</h3>
                    <?php print $requisites; ?>
                </div>
            <div class="col span_2_of_3">
                <?php if (!isset($_SESSION['loggedin'])) { ?>
	<a href="login/login.php"><button class="enrollButtons" >Login to enroll</button></a>
<?php } else {if (isset($_SESSION)) {
                        // print_r($_SESSION);
                        $accountid = $_SESSION['id'];
        $sql = "Select id from enrollments WHERE course_id = '$courseid' and account_id = '$accountid'";
        $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "already enrolled";
            } else {
                
                
                ?>
    <form action="enroll.php" method="post">
        <input type="hidden" name="courseid" value="<?php print $courseid; ?>">
        <input type="hidden" name="accountid" value="<?php print $accountid; ?>">
        <input type="submit" class="enrollButtons" value="Enroll">
    </form> 
            <?php } } } $conn->close();?>
            </div>
        </div>

          
    <footer>
        <?php include 'components/footer.php'; ?>
    </footer>
    </body>
    

</html>