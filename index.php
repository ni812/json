<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>
<?

// Выводим глобальную переменную _REQUEST в <pre> для удобства чтения массива
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";

$arUserInfo = array("name"=>$_REQUEST['user_name'], "second_name"=>$_REQUEST['user_second_name'], "last_name"=>$_REQUEST['user_last_name'], "address_city"=>$_REQUEST['user_address_city'], "address_street"=>$_REQUEST['user_address_street'], "address_house"=>$_REQUEST['user_address_house'], "address_number"=>$_REQUEST['user_address_number'], "address_city"=>$_REQUEST['user_address_city']);

// преобразуем массив в json при этом:  
// - Не кодировать многобайтовые символы Unicode (по умолчанию они кодируются как \uXXXX). 
// - Использовать пробельные символы в возвращаемых данных для их форматирования.
$strUserInfo = json_encode($arUserInfo, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

?>

	<form action="" method="POST">
		<strong>Ваше имя<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_name" id="user_name" value=""><br>

		<strong>Ваше отчество<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_second_name" id="user_second_name" value=""><br>

		<strong>Ваша фамилия<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_last_name" id="user_last_name" value=""><br>

		<strong>Ваш адрес (город)<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_address_city" id="user_address" value=""><br>

		<strong>Ваш адрес (улица)<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_address_street" id="user_address" value=""><br>

		<strong>Ваш адрес (дом)<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_address_house" id="user_address" value=""><br>

		<strong>Ваш адрес (квартира)<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_address_number" id="user_address" value=""><br>

		<input type="submit" name="submit" id="submit" value="Отправить">
	</form>
<div id="result">
	<!-- выводим json -->
	<?=$strUserInfo?>
</div>
</body>
</html>