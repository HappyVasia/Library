<!-- Книги -->
<?php
    $hostname="localhost";
	$username="root";
	$password="";
	$dbname="MyLibrary";
	$link = mysqli_connect($hostname, $username, 
	$password, $dbname) 
 or die("Ошибка " . mysqli_error($link));
	mysqli_set_charset($link,'utf8');


$query = "SELECT * FROM книги ";
$result = $link->query($query);
if (!$result) die($link->error); 

$rows = $result->num_rows; 


print<<< _HTML_
<head>

<link rel = "stylesheet" href = "booksStyle.css">
</head>
<body>

 <h1>  
 <p style="text-indent: 80px;">
 Список книг <br> библиотечного фонда </h1>
  
  <div> 
<a href="insertbook.php" div class="click"
style ="right:160px; top:20px; ">
 Добавить книгу </a>  
 </div> 
 
  <div> 
<a href="searchBook.php" div class="click" 
style = "right:450px; top:20px;">
 Найти книгу </a>  
 </div> 
 
 <div> 
<a href="MyLib.php" div class="click"
style ="left:0px; top:0px; 
width:50px;font-size:15px;
border-radius:0px;">
 Назад </a>  
 </div> 
 



   </body>
_HTML_;


echo '<table border ="1">
<tr> 
  <th style = "width:8px;"> Номер книги</th> 
  <th style = "width:150px;"> Автор</th>
  <th style = "width:200px;"> Название</th>  
  <th style = "width:100px;"> Жанр</th>
  <th style = "width:7px;"> Издательство</th> 
  <th style = "width:10px;"> Год издания</th> 
  <th style = "width:150px;"> Город издания</th>  
  <th style = "width:5px;"> Номер стеллажа</th>  
  <th style = "width:5px;">Стоимость</th>  
 </tr>';


for ($j = 0 ; $j < $rows ; ++$j)
{
$result->data_seek($j);
$row = $result->fetch_array(MYSQLI_NUM);
echo '<tr>';
for ($k = 0 ; $k < 9 ; ++$k) echo "<td>$row[$k]</td>";
echo '</tr>';
}
echo '</table>';



?>


