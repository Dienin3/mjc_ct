<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/courses.css" />        
        <link rel="stylesheet" href="css/style.css" />

        <script type="text/javascript" src="/js/javascript.js"></script>
    </head>
<?php
    include('setup.php');
    $sql = "Select  from pages where pagenum=1";
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
      <?php include('components/header.php');?> 
        
        <footer>
            <?php include('components/footer.php');?>
        </footer>
    </body>
</html>