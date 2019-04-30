<?php 
//index.php

$model_name = 'main';
// $model_name = ((!empty($_GET['model'])) ? $_GET['model'] : 'main');

if(!empty($_GET['model']))
{$model_name = $_GET['model'];}

$model_file = 'model/' . $model_name . '_model.php';
$view_file = 'view/' . $model_name . '_view.php';
$style_file = '..//css/' . $model_name . '_style.css';

// echo $model_file;
// echo "<br>";
// echo $view_file;

// проверяем существуют ли файлы
if(file_exists($model_file) and file_exists($view_file))
	{
		include $model_file;
		include $view_file;
	}
else
	{
		echo "404";
		exit;
	}

?>

</body>
</html>