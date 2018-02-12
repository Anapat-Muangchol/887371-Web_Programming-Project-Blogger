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
        <title>Comment</title>

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
                    <form action="../search/search.php" method="GET">
                        <div class="modal-body">
                            <input type="search" name="nameBlog" class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched" required="" placeholder="Enter name blog" value="">
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
                    <a href="../"><button type="button" class="navbar-btn btn btn-link" style="text-decoration: none;"><i class='glyphicon glyphicon-home'></i> Home</button></a>
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
                            else echo "<li><a href='../search/searchMonth.php?month=01'>January&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";

                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=02 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>February&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='../search/searchMonth.php?month=02'>February&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=03 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>March&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='../search/searchMonth.php?month=03'>March&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=04 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>April&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='../search/searchMonth.php?month=04'>April&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=05 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>May&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='../search/searchMonth.php?month=05'>May&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=06 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>June&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='../search/searchMonth.php?month=06'>June&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=07 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>July&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='../search/searchMonth.php?month=07'>July&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=08 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>August&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='../search/searchMonth.php?month=08'>August&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=09 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>September&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='../search/searchMonth.php?month=09'>September&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=10 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>October&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='../search/searchMonth.php?month=10'>October&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=11 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>November&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='../search/searchMonth.php?month=11'>November&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                            $sqlcntM="SELECT * FROM Article WHERE statusOff=0 AND month=12 AND year=2016";
                            $objMonth = $objConnect->query($sqlcntM);
                            if($objMonth->num_rows==0)echo "<li><a>December&nbsp;&nbsp;</a></li>";
                            else echo "<li><a href='../search/searchMonth.php?month=12'>December&nbsp;&nbsp;<span class='badge'>".$objMonth->num_rows."</span></a></li>";
                            
                        ?>
                        <!-- end of Entries for each month -->
                        <li class="divider"></li>
                        <li><a href="../search/searchYear.php"><i class="fa fa-external-link"></i>&nbsp;&nbsp;Other year</a></li>
                    </ul>
                    
                    
                    <!-- end of view archives -->
                </div>
                <div class="collapse navbar-collapse ng-scope" id="menu" data-ng-controller="logOut">
                    
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                            if(isset($_SESSION["member"])){
                                echo "<li><a href='write.php'><i class='glyphicon glyphicon-pencil'></i>&nbsp; Write</a></li>";
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
                
                $objConnect = mysql_connect("localhost","it57160033","fomfomza") or die("Error Connect to Database");
                $objDB = mysql_select_db("it57160033");
                $sqlSelect="SELECT * FROM Article WHERE idArticle=".$_GET['idArticle'];
                //echo $sqlSelect;
                mysql_query("set names utf8");
                $objArticle = mysql_query($sqlSelect);
                if ($row = mysql_fetch_object($objArticle)) {
                    if($row->statusOff!=0 && $row->nameMember!=$_SESSION['member']){
                        echo "<meta http-equiv='refresh' content='0;URL=../'>";
                    }else{
                        echo "<div class='container'>
                            <div class='row'>
                                <div class='col-md-1 col-xs-0'></div>
                                <div class='col-md-10 col-xs-12'>
                                    <div class='panel panel-default'>
                                        <div class='panel-heading'>
                                            <div class='form-group'>
                                                <font size='4px'><b>".$row->name."</b></font>";
                                                if($row->nameMember==$_SESSION["member"])echo "<a href='edit.php?idArticle=".$row->idArticle."'><button class='btn btn-warning btn-md pull-right'><i class='glyphicon glyphicon-edit'></i>&nbsp;&nbsp;Edit</button></a>";
                                                echo "
                                                <br><font size='2px'><i class='glyphicon glyphicon-calendar'></i> Posted on ".$row->date." at ".$row->time."</font>
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
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-1 col-xs-0'></div>
                            </div>
                        </div>";
                    }
                }else{
                    echo "<meta http-equiv=\"refresh\" content=\"0;URL=../\">";
                }

                $sqlSelectComment="SELECT * FROM Comment WHERE statusOff=0 AND idArticle=".$_GET['idArticle'];
                //echo $sqlSelectComment;
                $objComment = mysql_query($sqlSelectComment);
                while ($rowCom = mysql_fetch_object($objComment)) {
                    echo "<div class='container'>
                            <div class='row'>
                                <div class='col-md-2 col-xs-1'></div>
                                <div class='col-md-8 col-xs-10'>
                                    <div class='panel panel-default'>
                                        <div class='panel-body'>
                                            <div class='form-group'>
                                                <h5>".$rowCom->comment."</h5>
                                                
                                            </div>
                                        </div>
                                        <div class='panel-footer clearfix'>
                                            <font size='2px'><i class='glyphicon glyphicon-user'></i> Comment by ".$rowCom->nameMember." | <i class='glyphicon glyphicon-calendar'></i> ".$rowCom->date." at ".$rowCom->time;

                                            echo "
                                            </font>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-2 col-xs-1'></div>
                            </div>
                        </div>";
                }

                //login to comment
                if(isset($_SESSION["member"])){
                    echo "<div class='container'>
                            <div class='row'>
                                <div class='col-md-2 col-xs-1'></div>
                                <div class='col-md-8 col-xs-10'>
                                    <div class='panel panel-default'>
                                        <div class='panel-body'>
                                            <form action='doComment.php' method='post'>
                                                <textarea name='comment' id='comment' class='form-control text-area-fixed-width ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required' data-ng-disabled='posted' rows='1' data-ng-model='comment' placeholder='Comment... (max 250 characters)' required='' style='height: 114px;' maxlength='250' onkeydown='checkChar()' onkeyup='checkChar()' onkeypress='checkChar()'></textarea>
                                                <br>
                                                <font style='color:#808080;'>&nbsp;[<sapn id='charlength'>250</sapn> characters left]</font>
                                                <button type='submit' class='btn btn-info btn-md pull-right'><i class='glyphicon glyphicon-comment'></i>&nbsp;&nbsp;Comment</button></a>
                                                <input type='hidden' name='idArticle' value='".$_GET['idArticle']."'>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-2 col-xs-1'></div>
                            </div>
                        </div>";
                }else{
                    echo "<div class='container'>
                            <div class='row'>
                                <div class='col-md-2 col-xs-1'></div>
                                <div class='col-md-8 col-xs-10'>
                                    <div class='panel panel-default'>
                                        <div class='panel-body' style='color:blue;'>
                                            <font size='3' style='color:blue;'>Please login to comment</font>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-2 col-xs-1'></div>
                            </div>
                        </div>";
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

            var charRange = 250;
            function checkChar() {
                var num = charRange - document.getElementById('comment').value.length;
                if(num >= 0) {
                    document.getElementById('charlength').innerHTML = num;
                }
                return true;
            }
    </script>
</html>