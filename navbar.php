<?php
require_once "connection.php" ;

function showNavbar($auth, $uid) {
?>
<!-- Nav menu --------------------------------------------------------->
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Daylog</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about">About</a></li>
            <?php
            if ($auth === TRUE) { // (if user is logged in)
            ?>
                <li><a href="list.php?user=<?php echo "$uid"; ?>">My List</a></li>
                <li>
                    <p style="padding:15px; color:#FFFFFF;">
                        Welcome, <?php echo "$uid"; ?>.
                        <a style="color:#9D9D9D;" href="logout.php">Sign Out</a>
                    </p>
                </li>
            <?php
            } else {// (if user is not logged in)
                if ($_SESSION["loginerror"] != NULL AND $_SESSION["loginerror"] != "") { 
                // dropdown is open and shows error if applicable, otherwise closed and openable ?>
                <li class="dropdown open">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Login/Sign Up<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" style="padding:10px; border-color:#F00;">
                        <div class="alert alert-danger">
                            Error: <?php echo $_SESSION["loginerror"]; unset($_SESSION["loginerror"]); ?>
                        </div>
                <?php
                } else { // user is not logged in but there is no error 
                ?>
                <li class="dropdown" style="background-color:#555">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Login/Sign Up<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" style="padding:10px;">
                <?php
                } // regardless, since user is not logged in, show login form
                ?>
                        <form name="loginform" method="post" action="validate.php" class="navbar-form navbar-right" role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="username"><br>
                                <input type="password" class="form-control" placeholder="Password" name="password"><br>
                            </div>
                            <div align="right">
                                <button type="submit" name="loginsubmit" class="btn btn-link">Login</button>
                                 / <a href="register.php" class="btn btn-link">Sign Up</a><br>
                                <!--
                                <p>
                                    <small>
                                    <a href="#" style="color:#9D9D9D;">Forgot password?</a>
                                    <br><i>Lost passwords cannot be retrieved.</i>
                                    </small>
                                </p>
                                -->
                            </div>
                        </form>
                    </ul>
                </li>
            <?php
            } // end of case if user is not logged in
            ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container -->
</nav><!--/.navbar -->
<?php
}

?>