<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/form.css" />
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
            <h2 class="heading"><center><?php print $title1 ?></center></h2>
            <!-- Status message -->
<?php if(!empty($statusMsg)){ ?>
    <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>

<!-- Form fields -->
<form action="" method="post" class="form">
    <div class="form-input span_2_of_3">
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter your name" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" required="">
    </div>
    <div class="form-input span_2_of_3">
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Enter your email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required="">
    </div>
    <div class="form-input span_2_of_3">
        <label for="subject">Subject:</label>
        <input type="text" name="subject" placeholder="Enter subject" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>" required="">
    </div>
    <div class="form-input span_2_of_3">
        <label for="message">Message:</label>
        <textarea name="message" placeholder="Type your message here" required=""><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
    </div>
    <div class="form-input span_2_of_3">
        <input type="submit" name="submit" value="Submit">
    </div>
  </form>
 
        </div>  
    <footer>
        <?php include('components/footer.php');?>
    </footer>
    </body>

</html>