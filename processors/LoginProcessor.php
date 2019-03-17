
<?php 
require('api/objects/user_edit.php');
if(isset($_POST['admlogin']))
{
	echo("I did not work");
	$u = $_POST['admname'];
	$pass = $_POST['admpass'];
	
	$User = new User();
	$User->username = $u;
	$User->password = $pass;
	$ret =  $User->login();

	if($ret != null)
	{
	    session_start();
	    $json = json_decode($ret, true);
	    print_r($json);
	    $_SESSION["id"] = 1; //$json[""];
		header('location:index.php');
	}
	else
	{
		echo "<script>alert('Wrong Login Details, Try Again!')</script>";
	}
}
?>
