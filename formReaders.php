<?php
    $hostname="localhost";
	$username="root";
	$password="";
	$dbname="MyLibrary";
	$link = mysqli_connect($hostname, $username, 
	$password, $dbname) 
 or die("Ошибка " . mysqli_error($link));
	mysqli_set_charset($link,'utf8');
error_reporting(0);

print<<< _HTML_
<head>
<title> </title>
<link rel = "stylesheet" href = "formStyle.css">
</head>

<h1> 
Введите данные о новом читателе: </h1>

<div class = "forms">

<form method "POST" action = "formReaders.php" >

Фамилия: <input type = "text" name ="surname" >  <br>
Имя: <input type = "text" name ="name" />  <br>
Год рождения: <input type = "text" name ="year" >  <br>
Гендер: <br> <input type = "radio" name = "gender"
              value "female" checked > женский <br>
  <input type = "radio" name = "genre"
              value "male" checked > мужской <br>
  <input type = "radio" name = "genre"
             value "unknown" checked > нейтральный <br>
 Адрес: <input type = "text" name ="adress" >  <br>


<input type = "submit" class="button"
 name="submit" value = "Добавить"> <br>

<div class = "backs">
<a href="readers.php" div class="back">
 <- НАЗАД </a>  
 </div>

</form>
</div>

</body>
_HTML_;


$surname = $_GET["surname"];
$name = $_GET['name'];
$year = $_GET['year'];
$gender = $_GET['gender'];
$adress = $_GET['adress'];


$query = "INSERT INTO читатели (фамилия, имя, 
год_рождения, гендер, адрес) 
VALUES ('{$surname}', '{$name}', '{$year}', '{$gender}',
'{$adress}')";
$result = $link->query($query);



?>