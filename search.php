<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title></title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="search.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
<div class="glass" align="center">
<?php 
require_once('ConnectDB.php');
$inputSearch = $_POST['query'];
$sql = "SELECT * 
FROM `TABLE 1`
WHERE `вид` LIKE '%" . $inputSearch . "%' OR `возраст, год` LIKE '%" . $inputSearch . "%'
OR `кличка` LIKE '%" . $inputSearch . "%' OR `пол` LIKE '%" . $inputSearch . "%'
OR `порода` LIKE '%" . $inputSearch . "%' OR `адрес приюта` LIKE '%" . $inputSearch . "%' ";
$result = mysqli_query($connect, $sql);
if($result && mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $imgpath='/photo/'. str_replace("/","-", $row["адрес приюта"])  . "/" . str_replace(".","-",$row["карточка учета животного №"]) . ".jpg";
      ?>
      <!-- вывод картинки -->
    <br>
     <div class="card">
         <img src="<?php echo $imgpath ?>" alt="animal;" style="width:100%">
     <?php
        echo
        "<h1>", $row['кличка'],"</h1>",
        // "Вид: ", $row["вид"],
        // "<br/>",
        "<p class='title'>","Родился(ась): ", $row["возраст, год"],"</p>",
        // " Вес, кг: ", $row["вес, кг"],
        "<p>"," Порода: ",$row["порода"],"</p>",
        // "<br/>",
       "<p>", "Пол: ",$row["пол"],"</p>",
        // " Дата стерилизации: ",$row["дата стерилизации"],
        // "<br/>",
        "Живет в ",$row["адрес приюта"],
        "<br/>","<br/>";
        $id = $row["п/п"];
      ?>
            <!-- открыть кнопка  -->
            <form metod = "post" action = "profil.php">
            <input name = '$id' class="mosbutton" type = "submit" value = "Открыть">
          </form>

      </div>
      <?php
      }
    }
?>

</body>

</html>