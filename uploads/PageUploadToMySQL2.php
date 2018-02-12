<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?php
	if(copy($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
	{
		echo "Copy/Upload Complete<br>";

		//*** Insert Record ***//
		$objConnect = mysql_connect("localhost","it57160033","fomfomza") or die("Error Connect to Database");
		$objDB = mysql_select_db("it57160033");
		$strSQL = "INSERT INTO files ";
		$strSQL .="(Name,FilesName) VALUES ('".$_POST["txtName"]."','".$_FILES["filUpload"]["name"]."')";
		$objQuery = mysql_query($strSQL) or die("Error Upload");
		mysql_close($objConnect);
		echo "string";	
	}else{
		die("Error Uploaded...");
	}
?>
<a href="PageUploadToMySQL3.php">View files</a>
</body>
</html>