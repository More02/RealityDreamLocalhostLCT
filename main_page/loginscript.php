<meta charset="UTF-8">
<?php
if(isset($_POST['button'])) 
{
	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_DATABASE", "animals");
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

	if ($conn->connect_error) 
	{
		printf("Соединение не удалось: %s\n", $conn->connect_error);
		exit();
	}
	$login = $_POST['login'];
	$password = $_POST['password'];
	if (($login!=null)&&($password!=null)) 
	{
		$sql = "SELECT * FROM persons WHERE ((email = '$login')&&(password='$password') )";
		if (mysqli_query($conn, $sql)) 
		{
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			if (($row["email"]==$login)&&($row["password"]==$password)) 
			{
				if ($row["role"]=="Потенциальный владелец животного") {
					include('C:\OpenServer\domains\localhost\page_after_login\page_after_login.html');
				}
				else if (($row["role"]=="Департамент")||($row["role"]=="ГБУ Доринвест")) {
					include('C:\OpenServer\domains\localhost\page_after_login\page_after_login_depart_dorin.html');
				}
				else if (($row["role"]=="Префектура")||($row["role"]=="ГБУ Автомобильные дороги АО")) {
					include('C:\OpenServer\domains\localhost\page_after_login\page_after_login_prefect_dorogi.html');
				}
				else if (($row["role"]=="Работник приюта1")||($row["role"]=="Работник приюта2")||($row["role"]=="Работник приюта3")||($row["role"]=="Работник приюта4")||($row["role"]=="Работник приюта5")||($row["role"]=="Работник приюта6")||($row["role"]=="Работник приюта7")||($row["role"]=="Работник приюта8")||($row["role"]=="Работник приюта9")||($row["role"]=="Работник приюта10")||($row["role"]=="Работник приюта11")||($row["role"]=="Работник приюта12")||($row["role"]=="Работник приюта13")) {
					include('C:\OpenServer\domains\localhost\page_after_login\page_after_login_worker.html');
				}
				
			}
			else 
			{
			echo "No user with such email and password";
			}
		}
		else 
		{
		echo "Error while connecting to bd";
		}
		
	} 
	else 
	{
		printf ("Форма заполнена некорректно или не целиком");
	}
}
?>
