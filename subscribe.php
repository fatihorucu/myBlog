<?php
session_start();
$db = new mysqli("127.0.0.1", "root", "", "myblog","3306");
if (isset($_POST["submit"])) {
	$name =$_POST["fname"];
	$mail =$_POST["email"];
	$sql = "INSERT INTO `subscribe` (`id`, `name`, `mail`) VALUES (0,'$name','$mail')";
	$result = $db->query($sql);
	if ($result) {
		echo "Success";
	}
}



// $name = $_POST['fname'];
// $mail = $_POST['email'];
// $sql = "INSERT INTO 'subscribe'  ('id', 'name', 'mail',) VALUES ('0', '$name', '$mail')";
// $rs = mysqli_query($con, $sql);
// if($rs)
// {
// 	echo "Success";
// }
 ?>
