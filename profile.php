<html lang="en">
    <?php 
    session_start();
            if (!isset($_SESSION['loggedin'])){
                header('Location: login/login.php');
            } else {
            }
?>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="/js/javascript.js"></script>
    </head>
    
    <body>
        <?php include('components/header.php');?>
    </body>
    
    <footer>
        <?php include('components/footer.php');?>
    </footer>
</html>