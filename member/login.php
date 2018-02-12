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

	if(isset($_GET['logout'])){
        $_SESSION["member"] = null;
        echo "<h2>Logout Successfully!!...</h2>";
        echo "<meta http-equiv='refresh' content='2;URL=../'>";
    }else{
        $objConnect = mysql_connect("localhost","it57160033","fomfomza") or die("Error Connect to Database");
        $objDB = mysql_select_db("it57160033");
    
        $sql="SELECT * FROM Member WHERE email='".$_POST['emailLogin']."'";
        //echo $sql;
        $objMember = mysql_query($sql);
        if($member = mysql_fetch_object($objMember)){
            $password = md5($_POST['passwordLogin']);
            if($member->password == $password){
                $_SESSION["member"] = $member->name." ".$member->lname;
                echo "<h2>Welcome ".$_SESSION["member"]."</h2>";
                echo "<meta http-equiv='refresh' content='2;URL=../'>";
            }else{
                echo "<h2 style='color:red;'>Password is wrong!!</h2><h3 style='color:red;'>Please login again!!</h3>";
                echo "<meta http-equiv='refresh' content='3;URL=../'>";
            }
        }else{
            echo "<h2 style='color:red;'>E-mail is wrong!!</h2><h3 style='color:red;'>Please login again!!</h3>";
            echo "<meta http-equiv='refresh' content='3;URL=../'>";
        }
    }
	
?>


        </center></div></div></div>
    </body>
</html>