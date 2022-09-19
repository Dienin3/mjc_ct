
<header class="header">
    <div class="wrapper">
        <nav class="navbar">
                <a href="/mjc_ct/index.php" class="logo"><img class="logo-image" src="images/Logo.png">MJC: Teaching & Consulting</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="/mjc_ct/About-Me.php" class="nav-link">About Me</a>
                </li>
                <li class="nav-item">
                    <a href="/mjc_ct/Teaching.php" class="nav-link">Teaching</a>
                </li>
                <li class="nav-item">
                    <a href="/mjc_ct/Consulting.php" class="nav-link">Consulting</a>
                </li>
                <li class="nav-item">
                    <a href="/mjc_ct/Contact.php" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="/mjc_ct/courses.php" class="nav-link">Courses</a>
                </li>
              <?php if (!isset($_SESSION['loggedin'])) { ?>
                 <li class="nav-item">
				    <a href="/mjc_ct/login/login.php" class="nav-link">Login</a>
                </li>
   <?php     } else { ?>
                <li class="nav-item">
                    <a href="/mjc_ct/profile.php" class="nav-link">Profile</a>
                </li>
                <li class="nav-item fa-sign-out-alt">
				    <a href="/mjc_ct/login/logout.php" class="nav-link">logout</a>
                </li>
       <?php  } ?>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </div>
</header>

<script type="text/javascript" src="js/javascript.js"></script>

