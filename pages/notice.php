<?php
session_start();
?>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="datepicker.css">
    <link href="../css/main.css" rel="stylesheet" type="text/css">
  </head><body>

    <?php
    if (! isset($_SESSION['user_id'])){
      header("location:login.php");
    }
    require_once "../includes/header.php";
    ?>
    <div class="section section-primary animate-load">
      <div class="container">
        <h1 class="text-center">Notice</h1>
      </div>
    </div>
    <div class="section animate-load">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h1 class="text-muted">Add New Notice</h1>
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">Title</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputPassword3" class="control-label">Notice</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="Enter notice">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputPassword3" class="control-label">Image</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="Upload Image">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Publish</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-8">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Batch ID</th>
                  <th>Notice</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>CSBATCH6</td>
                  <td>Lectures cancelled!</td>
                  <td>
                    <a class="btn btn-danger btn-sm">Delete</a>
                    <a class="btn btn-sm btn-success">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>MISBATCH3</td>
                  <td>Get ready for assignments</td>
                  <td>
                    <a class="btn btn-danger btn-sm">Delete</a>
                    <a class="btn btn-sm btn-success">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>PLYBATCH4</td>
                  <td>Special meeting on sunday</td>
                  <td>
                    <a class="btn btn-danger btn-sm">Delete</a>
                    <a class="btn btn-sm btn-success">Edit</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script>
      var nowTemp = new Date();
                        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
                         
                        var checkin = $('#dpd1').datepicker({
                          onRender: function(date) {
                            return date.valueOf() < now.valueOf() ? 'disabled' : '';
                          }
                        }).on('changeDate', function(ev) {
                          if (ev.date.valueOf() > checkout.date.valueOf()) {
                            var newDate = new Date(ev.date)
                            newDate.setDate(newDate.getDate() + 1);
                            checkout.setValue(newDate);
                          }
                          checkin.hide();
                          $('#dpd2')[0].focus();
                        }).data('datepicker');
                        var checkout = $('#dpd2').datepicker({
                          onRender: function(date) {
                            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                          }
                        }).on('changeDate', function(ev) {
                          checkout.hide();
                        }).data('datepicker');
    </script>
  

</body></html>