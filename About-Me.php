<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...

?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="/js/javascript.js"></script>
        <?php include('components/header.php');?>
    </head>
    <?php
    include('setup.php');
    $sql = "Select title1, para1, img1 from pages where pagenum=2";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
        $title1 = $row["title1"];
        $para1 =$row["para1"];
        $img1 = $row["img1"];
      
  }
} else {
  echo "0 results";
}
$conn->close();
    ?>
    
    <body>
            <div class="section">
                <div class="col span_2_of_3">
                    <?php print $title1 ?>
                    <?php print $para1 ?>
                </div>
                <div class="col span_1_of_3">
                    <img class="about-me-img" src="images/<?php print $img1 ?>">
                </div>
            </div>
    </body>
    <footer>
        <?php include('components/footer.php');?>
    </footer>
</html>