<?php
	$doklad_qty = $_POST ['doklad_qty'];
	$chertezh_qty = $_POST ['chertezh_qty'];
	$prezent_qty = $_POST ['prezent_qty'];
	$otvety_qty = $_POST ['otvety_qty'];
	$demo_qty = $_POST ['demo_qty'];
	
	$average = ($doklad_qty + $chertezh_qty + $prezent_qty + $otvety_qty + $demo_qty)/5;
	
	include 'conf.php';
   
	$result = mysql_query("INSERT INTO table (doklad_qty, chertezh_qty, prezent_qty, otvety_qty, publ_qnty, maket_check, demo_qty, vnedrenie_check, average) VALUES ('$doklad_qty', '$chertezh_qty', '$prezent_qty', '$otvety_qty', '$publ_qnty', '$maket_check', '$demo_qty', '$vnedrenie_check', '$average')");
	if($result == 'true') 
	{echo "Ваши данные успешно добавлены";}
	else{echo "Ваши данные не добавлены";}
?>
<form method="post" action="index.php">
<table cellpadding="0" cellspacing="0">
	<tr>
		<td style="border:0;"></td>
		<td style="border:0;"></td>
		<td>Средние по комиссии оценки</td>
	</tr>
	<tr>
		<td>Качество доклада</td>
		<td><input type="text" name="doklad_qty" value="<?=$doklad_qty ?>" size="1" maxlength="1" />	</td>
		<td>оценка</td>
	</tr>
	<tr>
		<td>Качество чертежей</td>
		<td><input type="text" name="chertezh_qty" value="<?=$chertezh_qty ?>" size="1" maxlength="1" />	</td>
		<td>оценка</td>
	</tr>
	<tr>
		<td>Качество презентации</td>
		<td><input type="text" name="prezent_qty" value="<?=$prezent_qty ?>" size="1" maxlength="1" />	</td>
		<td>оценка</td>
	</tr>
	<tr>
		<td>Ответы на вопросы</td>
		<td><input type="text" name="otvety_qty" value="<?=$otvety_qty ?>" size="1" maxlength="1" />	</td>
		<td>оценка</td>
	</tr>
	<tr>
		<td>Наличие публикаций</td>
		<td><input type="text" name="publ_qnty" size="1" maxlength="1" />	</td>
		<td>кол-во</td>
	</tr>
	<tr>
		<td>Наличие макета</td>
		<td><input type="checkbox" value="maket_check" /></td>
		<td>есть/нет</td>
	</tr>
	<tr>
		<td>Демонстрация макета</td>
		<td><input type="text" name="demo_qty" value="<?=$demo_qty ?>" size="1" maxlength="1" />	</td>
		<td>оценка</td>
	</tr>
	<tr>
		<td>Наличие внедрения</td>
		<td><input type="checkbox" value="vnedrenie_check" /></td>
		<td>есть/нет</td>
	</tr>

	<tr>
		<td>Итог</td>
		<td><?php echo $average; ?>+ -<br /><span style="font-size:10px;">вернуть средний</span></td>
		<td>оценка</td>
	</tr>
</table>
<input class="button" type="submit" value="Отправить оценки">
</form>
