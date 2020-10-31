<meta charset="UTF-8">
<?php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "animals");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if ($conn->connect_error) {
    printf("Соединение не удалось: %s\n", $conn->connect_error);
	exit();
}
$LastName = $_POST['LastName'];
$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName'];
$mail = $_POST['mail'];
$mobile = $_POST['mobile'];
$select_role = $_POST['select_role'];
$password = $_POST['password'];
if (($LastName!=null)&&($FirstName!=null)&&($MiddleName!=null)&&($mail!=null)&&($mobile!=null)&&($select_role!=null)&&($password)) {
	if ($select_role=="Потенциальный владелец животного") {
		$sql = "INSERT INTO persons ( name, surname, lastname, email, phone_number, role, password) VALUES ( '$FirstName', '$LastName', '$MiddleName', '$mail', '$mobile', '$select_role', '$password')";
		if (mysqli_query($conn, $sql)) {
	      //echo "New record created successfully";
			include('C:\OpenServer\domains\localhost\page_after_register\page_after_register.html');
		} else {
			echo "При регистрации произошла ошибка";
		}
		mysqli_close($conn);
	} 
	else 
	{
		$sql = "SELECT * FROM persons_workers WHERE ((name = '$FirstName')&&(surname='$LastName')&&(lastname='$MiddleName')&&(email='$mail')&&(phone_number='$mobile')&&(role='$select_role')&&(password='$password') )";
		if (mysqli_query($conn, $sql)) {
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			if (($row["name"]==$FirstName)&&($row["surname"]==$LastName)&&($row["lastname"]==$MiddleName)&&($row["email"]==$mail)&&($row["phone_number"]==$mobile)&&($row["role"]==$select_role)&&($row["password"]==$password)) {
				printf("Сотрудник найден");
				//include('C:\OpenServer\domains\localhost\page_after_login\page_after_login.html');
				$sql = "INSERT INTO persons ( name, surname, lastname, email, phone_number, role, password) VALUES ( '$FirstName', '$LastName', '$MiddleName', '$mail', '$mobile', '$select_role', '$password')";
				if (mysqli_query($conn, $sql)) {
					//echo "New record created successfully";
					include('C:\OpenServer\domains\localhost\page_after_register\page_after_register.html');
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
		mysqli_close($conn);
			}
			else {
				include('C:\OpenServer\domains\localhost\page_after_register\page_after_register_badworkers.html');
			//echo "Сотрудник с введёнными данными не найден. Зарегестрируйтесь как потенциальный владелец животного или попробуйте снова";
			}
	      
		} 
		else {
	      echo "Error while connecting to bd";
		}
	}
	
}
else {
	printf ("Форма заполнена некорректно или не целиком");
}




?>