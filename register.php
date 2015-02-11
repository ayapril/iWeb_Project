<?
session_start();

$username = $_POST['username'];
$re_username = $_POST['reusername'];
$password = $_POST['password'];
$first_name = $_POST ['first_name'];
$last_name = $_POST ['last_name'];
$user_gender = $_POST ['user_gender'];

if ($username = $re_username){
	$con=mysql_connect("localhost", "ayoung", "j042319");
	
	if (!$con) {
		echo "Could not connect to server\n";
		trigger_error(mysql_error(), E_USER_ERROR);
	}
	else{
		mysql_select_db("ayoung", $con);
		$sql=mysql_query("INSERT INTO user (user_name, first_name, last_name, password, gender)
		VALUES ('$username', '$first_name', '$last_name', '$password', '$user_gender')");
	}
}

mysql_close($con);
echo "Welcome! Your register is done, $last_name!";

}
?>
