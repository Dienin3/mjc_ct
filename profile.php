<html lang="en">
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login/login.php');
    exit();
}
include 'setup.php';
//print_r ($_SESSION);
$name = $_SESSION['name'];
?>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" />
        <link href="login/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <script type="text/javascript" src="/js/javascript.js"></script>
    </head>
    
    <body>
        <?php include 'components/header.php'; ?>
            <div class="content">
			<h2>Profile Page</h2>
			<div>
				<table>
                        
						
    <?php if ($name == "admin") { ?>
        <tr>
            <td class="col span_3_of_3">
                <b>Hello Marcelo, here is a list of courses, and users registered to those courses:</b>
            </td>
        </tr>
        <?php
        //select all the courses
        $sql = "Select * from courses";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            //loop through each course
            while ($row = $result->fetch_assoc()) {

                $courseid = $row["id"];
                $title = $row["title"];
                $description = $row["description"];
                $img = $row["img"];
                ?>
                    <tr>
						<td class="col span_3_of_3">
                            <b>Course <?php print $courseid; ?>: <?php print $title; ?></b></td>
                    </tr>

					
 <?php
 $sql = "SELECT accounts.username, accounts.email
	FROM accounts JOIN enrollments ON accounts.id = enrollments.account_id WHERE course_id = '$courseid'";
 $result2 = $conn->query($sql);

 if ($result2->num_rows > 0) {
     // output data of each row
     //loop through each course
     while ($row2 = $result2->fetch_assoc()) {

         $name = $row2["username"];
         $email = $row2["email"];
         ?>
                    <tr>
						<td class="col span_3_of_3">
                            <?php print $name; ?> <b> | </b> 
                            <b>Email: </b> <?php print $email; ?>
                            
                        </td>
                    </tr>
 <?php
     }
 }

            }
        }
        } else { ?>
                    <tr>   
                        <td class="col span_3_of_3"> 
                            <?php print $name; ?>, you are enrolled in these courses below:
                        </td>
					</tr>
                <?php
              
                // In this case we can use the account ID to get the account info.

                $account_id = $_SESSION['id'];
                $sql = "SELECT courses.title, courses.id
FROM courses JOIN enrollments ON courses.id = enrollments.course_id
 where enrollments.account_id = '$account_id'";
                //print $sql;
                $result = $conn->query($sql);

                if ($result->num_rows >= 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                        $course_id = $row["id"];
                        $title = $row["title"];
                        ?>
                    <tr>
						<td class="col span_3_of_3">
                            <?php print $course_id; ?>) 
                            <?php print $title; ?>
                        </td>
					</tr>
 <?php
                    }
                }
                } ?>    
                    
                    
				</table>
			</div>
		</div>
            <footer>
                <?php include 'components/footer.php'; ?>
            </footer>
    </body>
</html>