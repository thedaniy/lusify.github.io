<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$firstname=filter_input(INPUT_POST,'firstname');
	$number=filter_input(INPUT_POST,'number');
	$email=filter_input(INPUT_POST,'email');
	$password=filter_input(INPUT_POST,'password');
	if(!empty($firstname)){
		if(!empty($number)){
			if(!empty($email)){
				if(!empty($password)){
					@mysqli_query($sql,$conn,'SET NAMES \'utf8\'');
	$conn=new MySQLi('localhost','php','phpdiana','university');
	if(mysqli_connect_error()){
		die('.ارتباط برقرار نشد('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
		$sql="INSERT INTO php(firstname,number,email,password)values('$firstname','$number','$email','$password')";
		if($conn->query($sql)){
			echo"<p>فرم ثبت نام با موفقیت ثبت شد  </p>";
		}
		else{
			echo"خطا".$sql."<br>".$conn->error;
		}
		$conn->close();
	}
	}
		else{
			echo"نام نباید خالی باشد";
			die();
		}
		}
		else{
			echo"شماره تلفن نباید خالی باشد";
			die();
		}
		}
			else{
			echo"ایمیل نباید خالی باشد";
			die();
		}
		}
		else{
			echo"پسورد نباید خالی باشد";
			die();
		}
		
		
	
	
?>
</body>
</html>