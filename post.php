<?php require_once('ConnectDB.php');
header('Content-Type: application/json');

$value=0; 
	foreach($_GET as $key => $value){
		// value - наш id
		$value;
	}
$sql = "SELECT * FROM `TABLE 1` WHERE `п/п` = '$value' ";
$result = mysqli_query($connect, $sql);
if($result && mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
	  $data = [
		 'кличка'=> $row['кличка'],
		 'вид'=>$row["вид"],
		 'порода'=>$row["порода"],
		 'пол'=>$row["пол"],
		 'возраст, год'=>$row["возраст, год"],
		 'вес, кг'=>$row["вес, кг"],
		 'дата стерилизации'=>$row["дата стерилизации"],
		 'адрес приюта'=>$row["адрес приюта"],
		 'url фото'=>$imgpath,
		];
		echo json_encode($data);}
	}

