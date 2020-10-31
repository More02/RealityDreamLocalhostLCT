<meta charset="UTF-8">
<?php
if(isset($_POST['button'])) {
		define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "animals");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if ($conn->connect_error) {
    printf("Соединение не удалось: %s\n", $conn->connect_error);
	exit();
}
$login = $_POST['login'];
$password = $_POST['password'];
if (($login!=null)&&($password!=null)) {
	$sql = "SELECT * FROM persons WHERE ((email = '$login')&&(password='$password') )";
	if (mysqli_query($conn, $sql)) {
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if (($row["email"]==$login)&&($row["password"]==$password)) {

			include('C:\OpenServer\domains\localhost\page_after_login\page_after_login.html');
		}
		else {
	      echo "No user with such email and password";
	}
	      
	} else {
	      echo "Error while connecting to bd";
	}
	mysqli_close($conn);
}
else {
	printf ("Форма заполнена некорректно или не целиком");
}
}

?>