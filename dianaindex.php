<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php
	 $ServerConnect = @mysqli_connect('localhost','php','phpdiana');
     $DatabaseConnect = @mysqli_select_db($ServerConnect,'university');
	 @mysqli_query($ServerConnect,'SET NAMES \'utf8\'');
     if($ServerConnect && $DatabaseConnect)
@mysqli_query($ServerConnect,"DELETE FROM student WHERE studentID= 2");
	?>
<body>
</body>
</html>