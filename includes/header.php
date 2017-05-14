<div class="navbar navbar-default navbar-static-top animate-load">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="../images/Logo.png" width="80" height=""></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="../pages/timetables.php">Time Table</a>
                </li>
                <li>
                    <a href="../pages/notice.php">Notice</a>
                </li>
                <li>
                    <?php
                    if(!isset($_SESSION["user_id"])){
                        echo'<a href="../pages/login.php">Login</a>';
                    }else{
                        echo'<a href="../actions/logout.php">Logout</a>';
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</div>