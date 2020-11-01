<?php


$choose = $_POST['a1'];
$adress = $_POST['a2'];
if ($choose = "Приложение 4. Сводный отчёт реестра животных") {
	if ($adress=="г.Москва, Востряковский пр-д, вл.10 А") {
		include("C:\OpenServer\domains\localhost\pril4_for_vostr.php");
	}
	else if ($adress=="г.Москва, Зеленоград, Фирсановское ш., вл.5А") {
		include("C:\OpenServer\domains\localhost\pril4_for_zelenograd.php");
	}
	else if ($adress=="г.Москва, Машкинское шоссе, вл. 4") {
		include("C:\OpenServer\domains\localhost\pril4_for_mashk.php");
	}
	else if ($adress=="г.Москва, проезд Дубовой Рощи, вл.23-25") {
		include("C:\OpenServer\domains\localhost\pril4_for_duborosh.php");
	}
	else if ($adress=="г.Москва, Проектируемый проезд №5112, вл.2-1") {
		include("C:\OpenServer\domains\localhost\pril4_for_proek5112.php");
	}
	else if ($adress=="г.Москва, Проектируемый проезд, 727") {
		include("C:\OpenServer\domains\localhost\pril4_for_proek727.php");
	}
	else if ($adress=="г.Москва, ул. Пехорская 1Б, с.6") {
		include("C:\OpenServer\domains\localhost\pril4_for_pehor.php");
	}
	else if ($adress=="г.Москва, ул. Родниковая, вл.26") {
		include("C:\OpenServer\domains\localhost\pril4_for_rodn.php");
	}
	else if ($adress=="г.Москва, ул.2-я Вольская, вл.17 стр.3") {
		include("C:\OpenServer\domains\localhost\pril4_for_volska.php");
	}
	else if ($adress=="г.Москва, ул.Брусилова, вл.32, стр.1-5") {
		include("C:\OpenServer\domains\localhost\pril4_for_brus.php");
	}
	else if ($adress=="г.Москва, ул.Искры, вл. 23А") {
		include("C:\OpenServer\domains\localhost\pril4_for_iskr.php");
	}
	else if ($adress=="г.Москва, ул.Красной Сосны, вл. 30, стр.4") {
		include("C:\OpenServer\domains\localhost\pril4_for_krasnsosn.php");
	}
	else if ($adress=="г.Москва, ул.Рассветная аллея, влд.10") {
		include("C:\OpenServer\domains\localhost\pril4_for_rassvet.php");
	}
}


?>