<!-- Читатели -->
<?php
    $hostname="localhost";
	$username="root";
	$password="";
	$dbname="MyLibrary";
	$link = mysqli_connect($hostname, $username, 
	$password, $dbname) 
 or die("Ошибка " . mysqli_error($link));
	
mysqli_set_charset($link,'utf8');


$query = "SELECT * FROM читатели ";
$result = $link->query($query);
if (!$result) die($link->error);

$rows = $result->num_rows;  

print<<< _HTML_
<head>

<title> Читатели </title>
<link rel = "stylesheet" href = "booksSTYLE.css">
</head>
<body>

 <h1> Список читателей </h1>
    
<a href="formReaders.php" div class="click" 
style = "right:200px; top:40px;">
 Добавить нового читателя </a>  
 </div> 
 
 
 
 </body>
_HTML_;

echo '<table border ="1">;
<tr> 
  <th style = "width:10px;"> Номер</th> 
  <th style = "width:140px;"> Фамилия</th>
  <th style = "width:120px;"> Имя</th>  
  <th style = "width:40px;"> Год рождения</th>
  <th style = "width:130px;"> Гендер</th> 
  <th style = "width:160px;"> Адрес</th>   
</tr>';

for ($j = 0 ; $j < $rows ; ++$j)
{
$result->data_seek($j);
$row = $result->fetch_array(MYSQLI_NUM);
echo '<tr>';
for ($k = 0 ; $k < 6 ; ++$k) echo "<td>$row[$k]</td>";
echo '</tr>';
}
echo '</table>';



?>