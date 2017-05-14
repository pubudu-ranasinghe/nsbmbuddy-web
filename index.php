<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        /* Center the loader */
        #loader {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 75px;
            height: 75px;
            margin: -75px 0 0 -75px;

            border-radius: 50%;
            border-top: 5px solid #337cbb;
            border-right: 5px solid rgba(0, 255, 0, 0);
            border-bottom: 5px solid #337cbb;
            border-left: 5px solid rgba(0, 255, 0, 0);
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Add animation to "page content" */
        .animate-load {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 500ms;
            animation-name: animatebottom;
            animation-duration: 500ms
        }

        @-webkit-keyframes animatebottom {
            from { bottom:-100px; opacity:0 }
            to { bottom:0px; opacity:1 }
        }

        @keyframes animatebottom {
            from{ bottom:-100px; opacity:0 }
            to{ bottom:0; opacity:1 }
        }

        #myDiv {
            display: none;
            text-align: center;
        }
    </style>
</head>
<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-load">
    <?php
    if(isset($_REQUEST['username'])){
        $uname=$_REQUEST['username'];
        }else{
            header ("location=pages/login.php");
        }
    if(isset($_REQUEST['password'])){
        $pword=$_REQUEST['password'];
    }
    if( $uname == "user" and $pword == "pass"){
        $_SESSION["user_id"]="user";
        header("refresh:3;url=pages/timetables.php");
    }
    if(isset($_SESSION["user_id"])){
        header("refresh:3;url=pages/timetables.php");
    }else{
        header("refresh:3;url=pages/login.php");
    }

    ?>

</div>

<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 3000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
</script>

</body>
</html>