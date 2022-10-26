<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/courses.css" />        
        <link rel="stylesheet" href="css/style.css" />

        <script type="text/javascript" src="/js/javascript.js"></script>
    </head>

    <body>
      <?php include 'components/header.php'; ?> 
        <div class="section">
        <div class="wrapper">
            <div class="span_3_of_3 para">
                <h2>Courses I Offer</h2>
            </div>
<?php
//This uses media queries to re-arrange the images on different screen sizes: for screens larger than 700px wide, it will show four images side by side, for screens smaller than 700px, it will show two images side by side. For screens smaller than 500px, the images will stack vertically (100%).
include 'setup.php';
$sql = "Select * from courses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $courseid = $row["id"];
        $title = $row["title"];
        $description = $row["description"];
        $img = $row["img"];
        ?>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="details.php?courseid=<?php print $courseid; ?>">
            <div class="desc">
        <h2><?php print $courseid; ?>) <?php print $title; ?></h2>
      </div>
      <img src="images/<?php print $img; ?>" alt="<?php print $title; ?>">
    </a>
  </div>
</div>
<?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<div class="clearfix"></div>

        </div>
        </div>
        <footer>
            <?php include 'components/footer.php'; ?>
        </footer>
    </body>
</html>