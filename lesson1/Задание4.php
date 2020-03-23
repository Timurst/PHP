<?php

// 4. Используя имеющийся HTML шаблон, сделать так, чтобы главная страница генерировалась через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных.

$h1 = "Информация!";
$title = "Главная страница!";
$year = date('Y');

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title><?=$title?></title>   
</head>

<body>
<h1><?=$h1?></h1>
       <div>            
            <p>Lorem</p>
        </div>
	   <footer>
       Copyright &copy; <?=$year?> Timur Timerbulatov </p>
		</footer>
</body>
</html>