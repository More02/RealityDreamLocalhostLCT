<meta charset="UTF-8">
<?php

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
	$a2 = $_POST['a2'];
	$a6 = $_POST['a6'];
	if (($a2!=null)&&($a6!=null)) 
	{
		$sql = "DELETE FROM `TABLE 1` WHERE ((`карточка учета животного №`='$a2')&&(`кличка`='$a6'))";
		if (mysqli_query($conn, $sql)) 
		{
			// $result = mysqli_query($conn, $sql);
			// $row = mysqli_fetch_assoc($result);
			// if (($row["карточка учета животного №"]==$a2)&&($row["кличка"]==$a6)) 
			// {
				include('C:\OpenServer\domains\localhost\page_delete_animals\page_after_delete.html');
			// }
			// else 
			// {
			// echo "No animal with such kard-number and name";
			// }
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

?>