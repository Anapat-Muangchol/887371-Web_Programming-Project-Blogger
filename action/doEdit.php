<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Blog</title>

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
        $sql="UPDATE `Article` SET `name`='".$_POST['name']."', `content`='".$_POST['content']."', `dateTimeEdit`='".date("Y-m-d")." at ".date("H:i")."', `statusOff`=".$statusOff." WHERE idArticle=".$_POST['idArticle'];
        //echo $sql;
        mysql_query("set names utf8");
        if(mysql_query($sql)){
            echo "<h3>Edit Successfully!!... </h3>";
            echo "<meta http-equiv='refresh' content='2;URL=../'>";
        }else{
            echo "<h2 style='color:red;'>Error your edit!!</h2><h3 style='color:red;'>Please edit again!!</h3>";
            echo "<meta http-equiv='refresh' content='3;URL=edit.php?idArticle=".$_POST['idArticle']."'>";
        }
    }
    
?>

                    </center>
                </div>
            </div>
        </div>
    </body>
</html>