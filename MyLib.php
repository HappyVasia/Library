<!-- MY Library -->
<?php

print<<<_HTML_
<head>
<meta charset ="utf-8">
<title> Библиотека </title>
<link rel = "stylesheet" href = "MyLibSTYLE.css">
</head>
<body>

<h1>
~ Моя библиотека ~ </h>

<div class = "blocks" > 
 <div
 style ="position:absolute; left:40px; "> 
 <a target= "_blank" href="books.php" div class="block"> 
 Книги </a>  
 </div>
 
 <div 
 style ="position:absolute; left:480px; "> 
<a href="readers.php" div class="block"> Читатели  </a>  
 </div>
  
<div 
 style ="position:absolute; right:40px; "> 
 <a target= "_blank" href="takes.php" div class="block">
 Выдачи </a> 
 </div>

</div>

<div style =margin-top:200px;>
<img 
   src ="библиотека2.jpg" 
   height = 350px;
   width = 550px;
   right:20px; left:20px;"
 >
</div>

</body>
_HTML_;





























?>