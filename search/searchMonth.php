<?php
    // Start the session
    session_start();
    //$_SESSION["member"]=null;
    /*
    if(isset($_SESSION["member"])){
        $objConnect = mysql_connect("localhost","it57160033","fomfomza") or die("Error Connect to Database");
        $objDB = mysql_select_db("it57160033");
        $sqlSelectName="SELECT name FROM Member WHERE idMember=".$_SESSION["member"].";";
        $objName = mysql_query($sqlSelectName) or die("Error Query [".$strSQL."]");
        $memberName = mysql_fetch_object($objName);
    }
    */
?>
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

        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="../css/main.css" type="text/css">

    </head>

    <body bgcolor="#DCDCDC">

        <!-- Modal content search-->
        <div id="search" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Search</h4>
                    </div>
                    <form action="search.php" method="GET">
                        <div class="modal-body">
                            <?php
                                if(isset($_GET['nameBlog']))echo "<input type='search' name='nameBlog' class='form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched' required='' placeholder='Enter name blog' value='".$_GET['nameBlog']."'>";
                                else echo "<input type='search' name='nameBlog' class='form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched' required='' placeholder='Enter name blog'>";
                            ?>
                            
                        </div>
                        <div class="modal-footer">
                            <button type='submit' class='btn btn-default pull-right'><i class='fa fa-search'></i>&nbsp;&nbsp;Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal content register-->
        <div id="register" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Register</h4>
                    </div>
                    <form action="../member/register.php" method="post" onsubmit="return checkFormRegister(this)">
                        <div class="modal-body">
                            <table>
                                <tr><td>E-mail&nbsp;:&nbsp;</td><td><input type="email" name="email">&nbsp;&nbsp;<span id="errEmail"></span></td></tr>
                                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                <tr><td>Password&nbsp;:&nbsp;</td><td><input type="password" name="password">&nbsp;&nbsp;<span id="errPass"></span></td></tr>
                                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                <tr><td>Confirm Password&nbsp;:&nbsp;</td><td><input type="password" name="Cpassword">&nbsp;&nbsp;<span id="errCPass"></span></td></tr>
                                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                <tr><td>First name&nbsp;:&nbsp;</td><td><input type="text" name="name">&nbsp;&nbsp;<span id="errName"></span></td></tr> 
                                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                <tr><td>Last name&nbsp;:&nbsp;</td><td><input type="text" name="lname">&nbsp;&nbsp;<span id="errLName"></span></td></tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <input type="reset" class="btn btn-default" value="Reset">&nbsp;<input type="submit" class="btn btn-default" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal content login-->
        <div id="login" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <form action="../member/login.php" method="post" onsubmit="return checkFormLogin(this)">
                        <div class="modal-body">
                            <table>
                                <tr><td>E-mail&nbsp;:&nbsp;</td><td><input type="email" name="emailLogin">&nbsp;&nbsp;<span id="errLoginEmail"></span></td></tr>
                                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                <tr><td>Password&nbsp;:&nbsp;</td><td><input type="password" name="passwordLogin">&nbsp;&nbsp;<span id="errLoginPass"></span></td></tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-default" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="Banner"></div>
        <div class="bgBanner" style="padding-bottom: 39px; padding-top: 39px; color:white">
            <h1 class="text-center text-shadow blogHeader" style="-webkit-text-stroke: 1.0px #000000; -webkit-text-fill-color: #FFFFFF;">B&nbsp;l&nbsp;o&nbsp;g&nbsp;g&nbsp;e&nbsp;r</h1>
            <h2 class="text-center text-shadow blogHeader" style="-webkit-text-stroke: 1.0px #000000; -webkit-text-fill-color: #FFFFFF;">design&nbsp;by&nbsp;Anapat&nbsp;Muangchol</h2>
        </div>
        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="200">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- view archives -->
                    <a class="navbar-brand dropdown-toggle" data-toggle="dropdown" role="button" id="archive" href="./">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <i class="glyphicon glyphicon-chevron-down" style='padding-left: 5px; font-size: 12px;'></i>
                    </a>
                    <a href="http://angsila.cs.buu.ac.th/~57160033/887371/miniproj2/"><button type="button" class="navbar-btn btn btn-link" style="text-decoration: none;"><i class='glyphicon glyphicon-home'></i> Home</button></a>
                    <button type="button" class="btn btn-link navbar-btn" data-toggle="modal" data-target="#search" style="text-decoration: none;"><i class="fa fa-search"></i>&nbsp;Search</button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="archive">
                        <li class="dropdown-header">In 2016</li>
                        <!-- Entries for each month -->
                        <?php
                            $objConnect = mysqli_connect("localhost","it57160033","fomfomza", "it57160033") or die("Error Connect to Database");
                            $objConnect->query("SET NAMES UTF8");

                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=01 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>January&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='searchMonth.php?month=01'>January&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";

                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=02 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>February&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='searchMonth.php?month=02'>February&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=03 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>March&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='searchMonth.php?month=03'>March&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=04 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>April&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='searchMonth.php?month=04'>April&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=05 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>May&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='searchMonth.php?month=05'>May&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=06 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>June&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='searchMonth.php?month=06'>June&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=07 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>July&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='searchMonth.php?month=07'>July&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=08 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>August&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='searchMonth.php?month=08'>August&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=09 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>September&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='searchMonth.php?month=09'>September&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=10 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>October&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='searchMonth.php?month=10'>October&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=11 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>November&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='searchMonth.php?month=11'>November&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=12 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>December&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='searchMonth.php?month=12'>December&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                        ?>
                        <!-- end of Entries for each month -->
                        <li class="divider"></li>
                        <li><a href="searchYear.php"><i class="fa fa-external-link"></i>&nbsp;&nbsp;Other year</a></li>
                    </ul>
                    
                    
                    <!-- end of view archives -->
                </div>
                <div class="collapse navbar-collapse ng-scope" id="menu" data-ng-controller="logOut">
                    
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                            if(isset($_SESSION["member"])){
                                echo "<li><a href='../action/write.php'><i class='glyphicon glyphicon-pencil'></i> &nbsp;Write</a></li>";
                                echo "<li class='dropdown-toggle' data-toggle='dropdown'><a href='#me'><i class='glyphicon glyphicon-user'></i> ".$_SESSION["member"]." <i class='glyphicon glyphicon-chevron-down' style='padding-left: 5px; font-size: 12px;'></i></a></li>
                                        <ul class='dropdown-menu'>
                                            <li><a href='../member/yourPost.php'><i class='glyphicon glyphicon-user'></i> Your Post</a></li>
                                            <li><a href='#' onclick='confirmLogout()'><i class='fa fa-sign-out'></i> Logout</a></li>
                                        </ul>";
                            }else{
                                echo "<ul class='nav navbar-nav'>
                                        <li><button type='button' class='btn btn-link navbar-btn' data-toggle='modal' data-target='#register'><i class='fa fa-user-plus'></i>&nbsp;Register</button></li>
                                        <li><button type='button' class='btn btn-link navbar-btn' data-toggle='modal' data-target='#login'><i class='fa fa-sign-in'></i>&nbsp;Login</button></li>
                                      </ul>";
                            }
                        ?>
                        
                    </ul>
                </div>
            </div>
        </nav>

            <?php
                
                $objConnect = mysqli_connect("localhost","it57160033","fomfomza", "it57160033") or die("Error Connect to Database");
                $objConnect->query("SET NAMES UTF8");

                $monthName="";
                if($_GET['month']==01 || $_GET['month']=="01")$monthName="January";
                else if($_GET['month']==02 || $_GET['month']=="02")$monthName="February";
                else if($_GET['month']==03 || $_GET['month']=="03")$monthName="March";
                else if($_GET['month']==04 || $_GET['month']=="04")$monthName="April";
                else if($_GET['month']==05 || $_GET['month']=="05")$monthName="May";
                else if($_GET['month']==06 || $_GET['month']=="06")$monthName="June";
                else if($_GET['month']==07 || $_GET['month']=="07")$monthName="July";
                else if($_GET['month']==08 || $_GET['month']=="08")$monthName="August";
                else if($_GET['month']==09 || $_GET['month']=="09")$monthName="September";
                else if($_GET['month']==10 || $_GET['month']=="10")$monthName="October";
                else if($_GET['month']==11 || $_GET['month']=="11")$monthName="November";
                else if($_GET['month']==12 || $_GET['month']=="12")$monthName="December";
                else $monthName="Not Found";

                if(empty($_GET['year'])){
                	echo "<div class='container'>
                                    <div class='row'>
                                        <div class='col-md-1 col-xs-0'></div>
                                        <div class='col-md-10 col-xs-12'>
                                            <div class='panel panel-default'>
                                                <div class='panel-body'>
                                                    <div class='form-group'>
                                                        <h4 style='color:blue;'><i class='fa fa-search'></i>&nbsp;&nbsp;The post was written in ".$monthName." 2016. </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-1 col-xs-0'></div>
                                    </div>
                                </div><br>";


                    $sqlSelect="SELECT * FROM Article WHERE statusOff=0 AND month=".$_GET['month']." ORDER BY idArticle DESC";
                    //echo $sqlSelect;
                    $objArticle = $objConnect->query($sqlSelect);
                    if($objArticle->num_rows==0){
                        echo "<div class='container'>
                                    <div class='row'>
                                        <div class='col-md-1 col-xs-0'></div>
                                        <div class='col-md-10 col-xs-12'>
                                            <div class='panel panel-default'>
                                                <div class='panel-body'>
                                                    <div class='form-group'>
                                                        <h4 style='color:red;'><i class='fa fa-search'></i>&nbsp;&nbsp;Search not found \"post in ".$monthName." 2016\" &nbsp;&nbsp;<i class='fa fa-exclamation-circle'></i></h4>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-1 col-xs-0'></div>
                                    </div>
                                </div>";
                    }
                    while ($row = $objArticle->fetch_object()) {
                            echo "<div class='container'>
                                    <div class='row'>
                                        <div class='col-md-1 col-xs-0'></div>
                                        <div class='col-md-10 col-xs-12'>
                                            <div class='panel panel-default'>
                                                <div class='panel-heading'>
                                                    <div class='form-group'>
                                                        <a href='../action/comment.php?idArticle=".$row->idArticle."'><h4><b>".$row->name."</b></h4></a>
                                                        <h5><i class='glyphicon glyphicon-calendar'></i> Posted on ".$row->date." at ".$row->time."</h5>
                                                    </div>
                                                </div>
                                                <div class='panel-body'>
                                                    <div class='form-group'>
                                                        <h5>".$row->content."</h5>
                                                        
                                                    </div>
                                                </div>
                                                <div class='panel-footer clearfix'>
                                                    <font size='2px'><i class='glyphicon glyphicon-user'></i> Posted by ".$row->nameMember;
                                                    if(isset($row->dateTimeEdit))echo " | <i class='glyphicon glyphicon-edit'></i> Edit on ".$row->dateTimeEdit;
                                                   
                                                    if($row->statusOff==0)echo " | <i class='fa fa-eye'></i> Public";
                                                    else echo " | <font style='color:#FF0000;'><i class='fa fa-eye-slash'></i> Private</font>";
        
                                                    echo "
                                                    </font>
                                                    <a href='../action/comment.php?idArticle=".$row->idArticle."'><button class='btn btn-info btn-md pull-right'><i class='glyphicon glyphicon-comment'></i>&nbsp;&nbsp;Comment</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-1 col-xs-0'></div>
                                    </div>
                                </div>";
                    }

                }else{

                	echo "<div class='container'>
                                    <div class='row'>
                                        <div class='col-md-1 col-xs-0'></div>
                                        <div class='col-md-10 col-xs-12'>
                                            <div class='panel panel-default'>
                                                <div class='panel-body'>
                                                    <div class='form-group'>
                                                        <h4 style='color:blue;'><i class='fa fa-search'></i>&nbsp;&nbsp;The post was written in ".$monthName." ".$_GET['year'].". </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-1 col-xs-0'></div>
                                    </div>
                                </div><br>";


                    $sqlSelect="SELECT * FROM Article WHERE statusOff=0 AND month=".$_GET['month']." AND year=".$_GET['year']." ORDER BY idArticle DESC";
                    //echo $sqlSelect;
                    $objArticle = $objConnect->query($sqlSelect);
                    if($objArticle->num_rows==0){
                        echo "<div class='container'>
                                    <div class='row'>
                                        <div class='col-md-1 col-xs-0'></div>
                                        <div class='col-md-10 col-xs-12'>
                                            <div class='panel panel-default'>
                                                <div class='panel-body'>
                                                    <div class='form-group'>
                                                        <h4 style='color:red;'><i class='fa fa-search'></i>&nbsp;&nbsp;Search not found \"post in ".$monthName." ".$_GET['year']."\" &nbsp;&nbsp;<i class='fa fa-exclamation-circle'></i></h4>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-1 col-xs-0'></div>
                                    </div>
                                </div>";
                    }
                    while ($row = $objArticle->fetch_object()) {
                            echo "<div class='container'>
                                    <div class='row'>
                                        <div class='col-md-1 col-xs-0'></div>
                                        <div class='col-md-10 col-xs-12'>
                                            <div class='panel panel-default'>
                                                <div class='panel-heading'>
                                                    <div class='form-group'>
                                                        <a href='../action/comment.php?idArticle=".$row->idArticle."'><h4><b>".$row->name."</b></h4></a>
                                                        <h5><i class='glyphicon glyphicon-calendar'></i> Posted on ".$row->date." at ".$row->time."</h5>
                                                    </div>
                                                </div>
                                                <div class='panel-body'>
                                                    <div class='form-group'>
                                                        <h5>".$row->content."</h5>
                                                        
                                                    </div>
                                                </div>
                                                <div class='panel-footer clearfix'>
                                                    <font size='2px'><i class='glyphicon glyphicon-user'></i> Posted by ".$row->nameMember;
                                                    if(isset($row->dateTimeEdit))echo " | <i class='glyphicon glyphicon-edit'></i> Edit on ".$row->dateTimeEdit;
                                                   
                                                    if($row->statusOff==0)echo " | <i class='fa fa-eye'></i> Public";
                                                    else echo " | <font style='color:#FF0000;'><i class='fa fa-eye-slash'></i> Private</font>";
        
                                                    echo "
                                                    </font>
                                                    <a href='../action/comment.php?idArticle=".$row->idArticle."'><button class='btn btn-info btn-md pull-right'><i class='glyphicon glyphicon-comment'></i>&nbsp;&nbsp;Comment</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-1 col-xs-0'></div>
                                    </div>
                                </div>";
                    }
                    
				}
            ?>
        </div>
    
    <span id="logoutRun"></span>
    </body>

    <script type="text/javascript">

            //Register Form Chack
            function checkFormRegister(form){
                valid = true;
                valid &= validateEmail(form.email.value);
                valid &= validatePass(form.password.value);
                valid &= validateCPass(form.Cpassword.value, form.password.value);
                valid &= validateName(form.name.value);
                valid &= validateLName(form.lname.value);
                return (valid == 0)? false : true;
            }
            function validateEmail(v) {
                if (v == "") {
                    document.getElementById('errEmail').innerHTML = "Please enter e-mail.";
                    return false;
                } else {
                    document.getElementById('errEmail').innerHTML = "";
                    if (!((v.indexOf(".") > 0) && (v.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(v)) {
                        document.getElementById('errEmail').innerHTML = "Please enter valid Email.";
                        return false;
                    }
                }
                return true
            }
            function validatePass(v) {
                if (v == "") {
                    document.getElementById('errPass').innerHTML = "Please enter password.";
                    return false;
                } else {
                    document.getElementById('errPass').innerHTML = "";
                }
                return true
            }
            function validateCPass(v,p) {
                if (v == "") {
                    document.getElementById('errCPass').innerHTML = "Please enter confirm password.";
                    return false;
                }else if (v != p) {
                    document.getElementById('errCPass').innerHTML = "The password is not the same.";
                    return false;
                } else {
                    document.getElementById('errCPass').innerHTML = "";
                }
                return true
            }
            function validateName(v) {
                if (v == "") {
                    document.getElementById('errName').innerHTML = "Please enter first name.";
                    return false;
                } else {
                    document.getElementById('errName').innerHTML = "";
                }
                return true
            }
            function validateLName(v) {
                if (v == "") {
                    document.getElementById('errLName').innerHTML = "Please enter last name.";
                    return false;
                } else {
                    document.getElementById('errLName').innerHTML = "";
                }
                return true
            }


            //Login Form Chack
            function checkFormLogin(form){
                valid = true;
                valid &= validateLoginEmail(form.emailLogin.value);
                valid &= validateLoginPass(form.passwordLogin.value);
                return (valid == 0)? false : true;
            }
            function validateLoginEmail(v) {
                if (v == "") {
                    document.getElementById('errLoginEmail').innerHTML = "Please enter e-mail.";
                    return false;
                } else {
                    document.getElementById('errLoginEmail').innerHTML = "";
                    if (!((v.indexOf(".") > 0) && (v.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(v)) {
                        document.getElementById('errEmail').innerHTML = "Please enter valid Email.";
                        return false;
                    }
                }
                return true
            }
            function validateLoginPass(v) {
                if (v == "") {
                    document.getElementById('errLoginPass').innerHTML = "Please enter password.";
                    return false;
                } else {
                    document.getElementById('errLoginPass').innerHTML = "";
                }
                return true
            }
            
            function confirmLogout() {
                var txt;
                var r = confirm("Are you sure to logout?");
                if (r == true) {
                    txt="<meta http-equiv=\"refresh\" content=\"0;URL=../member/login.php?logout=1\">";
                } else {
                    txt=null;              
                }
                document.getElementById("logoutRun").innerHTML = txt;
            }
    </script>
</html>