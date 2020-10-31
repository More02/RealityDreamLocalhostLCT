<meta charset="UTF-8">
<?php

require_once('ConnectDB.php');
// header('Content-Type: text/html; charset=utf-8');
$result = mysqli_query($connect, "SELECT * FROM `TABLE 1`");
$result2 = mysqli_fetch_array($result);
echo print_r($result2);
echo "<br>----------------------------------------<br>";
// echo print_r($array_values(get_object_vars($result)));
// $row =  mysql_fetch_assoc($result);
if($result && mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
	echo $row["п/п"];
	echo "<br>";
  }
}
echo "<br>----------------------------------------<br>";
echo "<br>----------------------------------------<br>";

// foreach ($result as $key => $value) {
// 	// TODO: почему то выдает еще и номер..
// 	if(gettype($key)!="integer"){
// 		echo $key;
// 	if(gettype($key)!="integer"){
// 	echo "<br>";
// 	echo $value;
// 	}
// 	}
// }

