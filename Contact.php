<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="/js/javascript.js"></script>
        <?php include('components/header.php');?>
    </head>
<?php
    include('setup.php');
    $sql = "Select  from pages where pagenum=5";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
        $title1 = $row["title1"];

      
  }
} else {
  echo "0 results";
}
$conn->close();
    ?>
   
    <body>
        <div class="section contactHero">
            
        </div>
    </body>
    
    <footer>
        <?php include('components/footer.php');?>
    </footer>
</html>