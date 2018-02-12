<?php
    // Start the session
    session_start();
    if($_SESSION["member"]==null){
        echo "<meta http-equiv='refresh' content='0;URL=pleaseLogin.php'>";
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Your Post</title>

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
                        <li><a href='../action/write.php'><i class='glyphicon glyphicon-pencil'></i>&nbsp; Write</a></li>
                        <li class='dropdown-toggle' data-toggle='dropdown'><a href='#me'><i class='glyphicon glyphicon-user'></i> <?php echo $_SESSION["member"]; ?> <i class='glyphicon glyphicon-chevron-down' style='padding-left: 5px; font-size: 12px;'></i></a></li>
                        <ul class='dropdown-menu'>
                            <li><a href='yourPost.php'><i class='glyphicon glyphicon-user'></i> Your Post</a></li>
                            <li><a href='#' onclick='confirmLogout()'><i class='fa fa-sign-out'></i> Logout</a></li>
                        </ul>
                    </ul>
                </div>
            </div>
        </nav>

            <?php
                
                $objConnect = mysql_connect("localhost","it57160033","fomfomza") or die("Error Connect to Database");
                $objDB = mysql_select_db("it57160033");
                $sqlSelect="SELECT * FROM Article WHERE nameMember='".$_SESSION['member']."' ORDER BY idArticle DESC";
                //echo $sqlSelect;
                mysql_query("set names utf8");
                $objArticle = mysql_query($sqlSelect);
                while ($row = mysql_fetch_object($objArticle)) {
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

            ?>
        </div>
    
    <span id="logoutRun"></span>
    </body>

    <script type="text/javascript">
            
            function confirmLogout() {
                var txt;
                var r = confirm("Are you sure to logout?");
                if (r == true) {
                    txt="<meta http-equiv=\"refresh\" content=\"0;URL=login.php?logout=1\">";
                } else {
                    txt=null;              
                }
                document.getElementById("logoutRun").innerHTML = txt;
            }
    </script>
</html>