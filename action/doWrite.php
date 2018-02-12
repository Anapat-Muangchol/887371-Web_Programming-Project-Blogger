<html>
    <head>
        <meta charset="UTF-8">
        <title>Write Blog</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="../css/main.css" type="text/css">

    </head>

    <body bgcolor="#DCDCDC">
        <div class="container">
            <div class='row' style='background-color:#FFFFFF;'>
                <div class='col-sm-12'>
                    <center>

<?php
    // Start the session
    session_start();

    if($_SESSION["member"]==null){
        echo "<meta http-equiv='refresh' content='0;URL=../member/pleaseLogin.php'>";
    }else{
        $objConnect = mysql_connect("localhost","it57160033","fomfomza") or die("Error Connect to Database");
        $objDB = mysql_select_db("it57160033");
        
        $statusOff=0;
        if(isset($_POST['statusOff']))$statusOff=1;
        $sql="INSERT INTO `Article`(`name`, `content`, `nameMember`, `date`, `month`, `year`, `time`, `statusOff`) 
            VALUES ('".$_POST['name']."', '".$_POST['content']."', '".$_SESSION["member"]."', '".date("Y-m-d")."', '".date("m")."', '".date("Y")."', '".date("H:i:s")."', ".$statusOff." )";
        //echo $sql;
        mysql_query("set names utf8");
        if(mysql_query($sql)){
            echo "<h3>Post Successfully!!... </h3>";
            echo "<meta http-equiv='refresh' content='2;URL=../'>";
        }else{
            echo "<h2 style='color:red;'>Error your post!!</h2><h3 style='color:red;'>Please post again!!</h3>";
            echo "<meta http-equiv='refresh' content='3;URL=write.php'>";
        }
    }
    
?>

                    </center>
                </div>
            </div>
        </div>
    </body>
</html>