<?php
session_start();
if(isset($_SESSION["user_id"])){
  header("location:../pages/timetables.php");
}
?>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/main.css" rel="stylesheet" type="text/css">
  </head><body>
    <?php
    require_once "../includes/header.php";
    ?>
    <div class="section section-primary animate-load">
      <div class="container">
        <h1 class="text-center">Login</h1>
      </div>
    </div>

    <div class="section animate-load">
      <div class="container">
        <div class="container">
          <div class="col-md-4">
            <img src="../images/Login.png" class="hidden-xs img-responsive">
          </div>
          <div class="col-md-6">
            <form class="form-horizontal" role="form" action="../index.php" method="post">
              <div class="form-group">
                <div class="col-sm-3">
                  <label for="inputName" class="control-label">User Name</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="User Name" name="username">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-3">
                  <label for="inputPassword3" class="control-label">Password</label>
                </div>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">Remember me</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-info">Sign in</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  

</body></html>