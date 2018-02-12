<html>
    <head>
        <meta charset="UTF-8">
        <title>Blogger</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="../css/main.css" type="text/css">

    </head>

    <body bgcolor="#DCDCDC">
        <div class="container">
            <div class='row' style='background-color:#FFFFFF;'>
                <div class='col-sm-12'><center>

<?php
	// Start the session
	session_start();
	
	$objConnect = mysql_connect("localhost","it57160033","fomfomza") or die("Error Connect to Database");
    $objDB = mysql_select_db("it57160033");
    $password = md5($_POST['password']);
    $sql="INSERT INTO Member(email, password, name, lname) VALUES ('".$_POST['email']."', '".$password."', '".$_POST['name']."', '".$_POST['lname']."');";
    //echo $sql;
    mysql_query("set names utf8");
    if(mysql_query($sql)){
    	$_SESSION["member"]=$_POST['name']." ".$_POST['lname'];
    	echo "<h3>Register Successfully!!... </h3><h2>Welcome ".$_SESSION["member"]."</h2>";
    	echo "<meta http-equiv='refresh' content='2;URL=../'>";
    }else{
    	echo "<h3 style='color:red;'>Register Unsuccess!! Because this email is already used.</h3><h2 style='color:red;'>Please register again!!</h2>";
    	echo "<meta http-equiv='refresh' content='4;URL=../'>";
    }
?>
    
    
        </center></div></div></div>
    </body>
</html>