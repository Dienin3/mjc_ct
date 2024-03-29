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
    </head>
<?php
include 'setup.php';
$sql = "Select title1, para1, img1, para2, img2, para3, title4, reviewtext1, reviewtext2, reviewtext3, reviewtext4 from pages where pagenum=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $title1 = $row["title1"];
        $para1 = $row["para1"];
        $img1 = $row["img1"];
        $para2 = $row["para2"];
        $img2 = $row["img2"];
        $para3 = $row["para3"];
        $title4 = $row["title4"];
        $reviewtext1 = $row["reviewtext1"];
        $reviewtext2 = $row["reviewtext2"];
        $reviewtext3 = $row["reviewtext3"];
        $reviewtext4 = $row["reviewtext4"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
    
    <body>
        <?php include 'components/header.php'; ?>

        <?php include 'components/hero.php'; ?>
        <div class="section">
                <div class="col span_2_of_3">
                    <h1><u><?php print $title1; ?></u></h1>
                        <?php print $para1; ?>
                </div>
                <div class="col span_1_of_3"> 
                    <img class="home-img" src="images/<?php print $img1; ?>" alt="photo of corn on a table">
                </div>
        </div>
        <div class="section">
                <div class="col span_1_of_3">
                    <img class="home-img-2" src="images/<?php print $img2; ?>" alt="graphic design of colored corn">
                </div>
                <div class="col span_2_of_3">
                    <?php print $para2; ?>
                </div>
            </div> 
        <div class="home-impact-section col span_3_of_3">
                <div>
                    <?php print $para3; ?>
                </div> 
            </div>           
        <div class="section">
            <div class="home-review-title span_3_of_3">
                <?php print $title4; ?>
            </div>
            <div>
                <div class="review col span_1_of_4">
                    <?php print $reviewtext1; ?>
                </div>
                <div class="review col span_1_of_4">
                    <?php print $reviewtext2; ?>
                </div>
                <div class="review col span_1_of_4">
                    <?php print $reviewtext3; ?>
                </div>
                <div class="review col span_1_of_4">
                    <?php print $reviewtext4; ?>
                </div>
            </div>
        </div> 
    </body>
    
    <footer>
        <?php include 'components/footer.php'; ?>
    </footer>
</html>