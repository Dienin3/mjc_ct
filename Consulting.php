<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
?>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/courses.css" />
        <link rel="stylesheet" href="css/style.css" />

        <script type="text/javascript" src="/js/javascript.js"></script>
    </head>

    <body>
        <?php include 'components/header.php'; ?>
        <div class="heroImage2">
            <div class="wrapper">
                <div class="span_3_of_3">
                    <h2 class="heading">Consultancy Options</h2>
                </div>
                <?php
include 'setup.php';
$sql = "Select * from conoptions";
$result = $conn->query($sql); 
    if ($result->num_rows > 0) { // output data of each row while ($row = $result->fetch_assoc()) { $conid = $row["id"]; $title = $row["title"]; $desc = $row["description"]; 
        while ($row = $result->fetch_assoc()) {
        $title = $row["title"];
        $desc = $row["description"];
    ?>
                <ul class="c-background">
                    <li class="c-options">
                        <h2>
                            <?php print $title; ?>
                        </h2>
                        <p>
                            - <?php print $desc; ?>
                        </p>
                    </li>
                </ul>
                <?php
    }
    } else {
    echo "0 results";
}
$conn->close(); ?>
            <center style="padding-bottom: 2rem;">    
                <h3 class="heading" style="padding-bottom: 0.2rem;">If you're interested, please contact me!</h3>
                <a href="Contact.php"><button class="enrollButtons">Contact me!</button></a>
            </center>
            </div>
        </div>
        <footer>
            <?php include 'components/footer.php'; ?>
        </footer>
    </body>
</html>
