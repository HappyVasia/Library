<!-- Выдачи -->
<?php
    $hostname="localhost";
	$username="root";
	$password="";
	$dbname="MyLibrary";
	
$link = mysqli_connect($hostname, $username, 
	$password, $dbname) 
 or die("Ошибка " . mysqli_error($link));
	
mysqli_set_charset($link,'utf8');

$query = "SELECT выдачи_id, дата_выдачи,
читатели_id,  фамилия, имя, книги_id, автор,
название, вернуть_до, возврат FROM выдачи
INNER JOIN книги using(книги_id)
INNER JOIN читатели using(читатели_id)";




$result = $link->query($query);
if (!$result) die($link->error); 

$rows = $result->num_rows; 


print<<< _HTML_
<head>

<title> Выдачи </title>
<link rel = "stylesheet" href = "booksSTYLE.css">
</head>
<body>

<h1> Список выдач книг </h1> 
   
 <a href="" div class="click" 
style = "right:320px; top:10px;width:400px;">
 Добавить новую запись </a>  
 </div> 
 
 
 
 </body>
_HTML_;


echo '<table border ="1">
<tr> 
  <th style = "width:8px;"> Номер выдачи</th> 
  <th style = "width:120px;"> Дата выдачи</th>
  <th style = "width:40px;"> Код читателя </th>
  <th style = "width:120px;"> Фамилия читателя </th>  
  <th style = "width:110px;"> Имя читателя </th>
  <th style = "width:40px;"> Номер книги </th>
  <th style = "width:170px;"> Автор книги </th>
  <th style = "width:200px;"> Название книги </th>
  <th style = "width:120px;"> До какого выдана </th> 
  <th style = "width:75px;"> Отметка о возврате</th> 
  
   
</tr>';



for ($j = 0 ; $j < $rows ; ++$j)
{
$result->data_seek($j);
$row = $result->fetch_array(MYSQLI_NUM);
echo '<tr>';
for ($k = 0 ; $k < 10 ; ++$k) echo "<td>$row[$k]</td>";
echo '</tr>';
}
echo '</table>';






?>
