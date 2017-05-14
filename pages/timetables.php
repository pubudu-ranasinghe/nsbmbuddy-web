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
    if(!isset($_SESSION["user_id"])){
      header("location:../pages/login.php");
    }
    require_once "../includes/header.php";
    ?>
    <div class="section section-primary animate-load">
      <div class="container">
        <div class="row">
          <h1 class="text-center">Update Timetable</h1>
        </div>
        <div class="row">
          <table>
            <tr id="0">
              <td><input class="form-control" type="text" name="batch" id="batch" placeholder="Batch"></td>
              <td><input class="form-control" type="date" name="date" id="date"placeholder="Date"></td>
              <td><input class="form-control" type="text" name="module" id="module" placeholder="Module"></td>
              <td><input class="form-control" type="text" name="lecturer" id="lecturer" placeholder="Lecturer"></td>
              <td><input class="form-control" type="text" name="hall" id="hall" placeholder="Hall"></td>
              <td><input class="form-control" type="text" name="time" id="time" placeholder="Time"></td>
              <td><a class="btn btn-sm btn-primary" onclick="send()">Add</a></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="section animate-load">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Batch</th>
                  <th>Date</th>
                  <th>Module</th>
                  <th>Lecturer</th>
                  <th>Hall</th>
                  <th>Time</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <tr id="1"></tr>
              <tr id="2"></tr>
              <tr id="3"></tr>
              <tr id="4"></tr>
              <tr id="5"></tr>
              <tr id="6"></tr>
              <tr id="7"></tr>
              <tr id="8"></tr>
              <tr id="9"></tr>
              <tr id="10"></tr>
              </tbody>
            </table>
            <a class="btn btn-lg btn-primary" onclick="prev()">Previous</a>
            <a class="btn btn-lg btn-primary" onclick="next()">Next</a>
          </div>
        </div>
      </div>
    </div>

    <script src="https://www.gstatic.com/firebasejs/3.9.0/firebase.js"></script>
    <script>
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyC9pB5K9XAE9gPjDzLeU5C82rhqECMoLOM",
        authDomain: "koobalol.firebaseapp.com",
        databaseURL: "https://koobalol.firebaseio.com",
        projectId: "koobalol",
        storageBucket: "koobalol.appspot.com",
        messagingSenderId: "413877148890"
      };
      firebase.initializeApp(config);
    </script>
    <script src="../js/timetable.js"></script>
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