<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...

?>
<html lang="en">
    <head>
        <meta charset="UTF-8">       
        <link rel="stylesheet" href="css/style.css" />

        <script type="text/javascript" src="/js/javascript.js"></script>
    </head>
<?php
    include('setup.php');
    $sql = "Select title1, para1, img1, para2, img2, para3, para4, para5, para6 from pages where pagenum=4";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
        $title1 = $row["title1"];
        $img1 = $row["img1"];
        $img2 = $row["img2"];
        $para1 = $row["para1"];
        $para2 = $row["para2"];
        $para3 = $row["para3"];
        $para4 = $row["para4"];
        $para5 = $row["para5"];
        $para6 = $row["para6"];
      
  }
} else {
  echo "0 results";
}
$conn->close();
    ?>
    <body>
      <?php include('components/header.php');?>    
            <div class="heroImage3">
	           <div class="heroContents">
                   <h1><?php print $title1; ?></h1>
                   <p>By: Marcelo J. Carena</p>
                </div>
            </div>
            <div class="section">
                <div class="col span_1_of_3">
                    <img class="home-img" src="images/<?php print $img1; ?>">
                </div>
                <div class="col span_2_of_3 paraAlign">
                    <?php print $para1; ?>
                </div>
            </div>
            <div class="home-impact-section col span_3_of_3">
                <div>
                    <h4><?php print $para2 ?></h4>
                </div> 
            </div>
            <div class="section para span-text">
                <div class="col span_2_of_4">
                    <?php print $para3; ?>
                </div>
                <div class="col span_2_of_4">
                    <?php print $para4; ?>
                </div>
            </div>
            <div class="section">
                <h4 class="heading">
                    Aims
                </h4>
                <div class="col span_3_of_3 span-text">
                    <?php print $para5; ?>
                </div>
            </div>
            <div class="section">
                <div class="col span_2_of_4">
                    <img class="home-img" src="images/<?php print $img2; ?>">
                </div>
                <div class="col span_2_of_4 span-text">
                    <?php print $para6; ?>
                </div>
            </div>
        <footer>
            <?php include('components/footer.php');?>
        </footer>
    </body>
</html>