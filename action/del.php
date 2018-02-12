<html>
    <head>
        <meta charset="UTF-8">
        <title>Delete Blog</title>

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

    $objConnect = mysql_connect("localhost","it57160033","fomfomza") or die("Error Connect to Database");
    $objDB = mysql_select_db("it57160033");
    $sqlSelect="SELECT * FROM Article WHERE idArticle=".$_GET['idArticle'];
    //echo $sqlSelect;
    mysql_query("set names utf8");
    $objArticle = mysql_query($sqlSelect);
    $row = mysql_fetch_object($objArticle);

    if($_SESSION["member"]==null){
        echo "<meta http-equiv='refresh' content='0;URL=../member/pleaseLogin.php'>";
    }else if($_SESSION["member"]!=$row->nameMember){
        echo "<meta http-equiv='refresh' content='0;URL=../'>";
    }else{
        $sql="DELETE FROM `Article` WHERE idArticle=".$_GET['idArticle'];
        //echo $sql;
        if(mysql_query($sql)){
            echo "<h3>Delete Successfully!!... </h3>";
            echo "<meta http-equiv='refresh' content='2;URL=../'>";
        }else{
            echo "<h2 style='color:red;'>Error your delete!!</h2><h3 style='color:red;'>Please delete again!!</h3>";
            echo "<meta http-equiv='refresh' content='3;URL=edit.php?idArticle=".$_GET['idArticle']."'>";
        }
    }
    
?>

                    </center>
                </div>
            </div>
        </div>
    </body>
</html>