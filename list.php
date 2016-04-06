<?php

include "connection.php";

session_start();

$auth = (isset($_SESSION["uid"]));
if ($auth === TRUE) {
    $uid = $_SESSION["uid"];
} else {
    $uid = "Guest";
}
// Define variables
$uview = filter_input(INPUT_GET, "user");
$gname = filter_input(INPUT_GET, "game");

// Check DB/session to see if this is us, load different way depending
$is_current = ($uid === $uview AND $auth === \TRUE);

?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Daylog - (<?php echo "$uid, $gname"; ?>)</title>
        
        <!-- Styles ----------------------------------------------------------->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="daylog_style.css" rel="stylesheet">
        
        <!-- Scripts ---------------------------------------------------------->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <!-- Navbar ----------------------------------------------------------->
        <?php
        include "navbar.php";
        showNavbar($auth, $uid);
        ?>
        
        <!-- Page contents ---------------------------------------------------->
        
        
        
        <div class="gameheader">
            <div class="icon"></div><div class="asdf"
            <?php ?>
        </div>
        
    </body>
</html>

<?php
// --- Display Functions ----------------

function foo($bar) {
    
}

?>