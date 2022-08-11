<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="/js/javascript.js"></script>
        <?php include('components/header.php');?>
    </head>
    <?php 
// Form submission script 
include_once 'submit.php'; 
?>
<?php
    include('setup.php');
    $sql = "Select title1 from pages where pagenum=3";
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
            <?php print $title1 ?>
            <!-- Status message -->
<?php if(!empty($statusMsg)){ ?>
    <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>

<!-- Form fields -->
<form action="" method="post">
    <div class="form-input">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your name" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" required="">
    </div>
    <div class="form-input">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter your email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required="">
    </div>
    <div class="form-input">
        <label for="subject">Subject</label>
        <input type="text" name="subject" placeholder="Enter subject" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>" required="">
    </div>
    <div class="form-input">
        <label for="message">Message</label>
        <textarea name="message" placeholder="Type your message here" required=""><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
    </div>
    
    <input type="submit" name="submit" class="btn" value="Submit">
</form>
        </div>
    </body>
    
    <footer>
        <?php include('components/footer.php');?>
    </footer>
</html>