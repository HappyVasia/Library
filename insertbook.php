<!-- Добавить книгу -->
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
<title> Книги </title>
<link rel = "stylesheet" href = "formStyle.css">
</head>

<h1> 
Введите данные о новой книге: </h1>

<div class = "forms">

<form method "POST" action = "insertbook.php" >

Автор: <input type = "text" name ="author" >  <br>
Название: <input type = "text" name ="title" />  <br>
Жанр: <br> <input type = "radio" name = "genre"
              value "roman" checked > роман <br>
  <input type = "radio" name = "genre"
              value "stihi" checked > стихи <br>
  <input type = "radio" name = "genre"
             value "povest" checked > повесть <br>
 <input type = "radio" name = "genre"
             value "komedia" checked > комедия <br>
 <input type = "radio" name = "genre"
             value "poema" checked > поэма <br>
 <input type = "radio" name = "genre"
             value "tragedia" checked > трагедия <br>
Издательство: <br> <input type = "radio" name = "izdat"
             value "AST" checked > АСТ <br>
  <input type = "radio" name = "izdat"
             value "male" checked > Бонни <br>
Год издания: <input type = "text" name ="year" >  <br>
Город издания: <br> <input type = "radio" name = "gorod"
             value "Moskva" checked > Москва <br>
             <input type = "radio" name = "gorod"
      value "Piter" checked > Санкт-Петербург <br>
Номер стеллажа: <input type = "text" name= "place"> <br>
Стоимость: <input type = "text" name= "price" >  <br>

<input type = "submit" class="button"
 name="submit" value = "Добавить"> <br>

<div class = "backs">
<a href="books.php" div class="back">
 <- НАЗАД </a>  
 </div>

</form>
</div>

</body>
_HTML_;


$author = $_GET["author"];
$title = $_GET['title'];
$genre = $_GET['genre'];
$izdat = $_GET['izdat'];
$year = $_GET['year'];
$gorod = $_GET['gorod'];
$place = $_GET['place'];
$price = $_GET['price']; 
$submit = $_GET['submit'];





$query = "INSERT INTO книги (автор,название,жанр,
издательство,год_издания,город_издательства,
номер_стеллажа,стоимость) 
VALUES ('{$author}', '{$title}', '{$genre}', '{$izdat}',
$year, '{$gorod}', '{$place}', $price)";
$result = $link->query($query);



?>

