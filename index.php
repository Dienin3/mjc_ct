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
    $sql = "Select title1, para1, img1 from pages where id=1";
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
        <?php include('components/hero.php')?>
        <div class="home-section">
                <div class="home-section-text">
                    <h1><u><?php print $title1 ?></u></h1>
                        <?php print $para1 ?>
                </div>
                <div>
                    <img class="home-img" src="images/<?php print $img1 ?>">
                </div>
            </div>        
        
    </body>
    
    <footer>
        <?php include('components/footer.php');?>
    </footer>
</html>