<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
print_r ($_post);
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="/js/javascript.js"></script>
    </head>
    
    <body>
        <?php include('components/header.php');?>
        
        
        <footer>
            <?php include('components/footer.php');?>
        </footer>
    </body>
</html>