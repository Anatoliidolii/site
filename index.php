<!DOCTYPE html>
<html>
<head>
	<title>Скотина</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>

<font  method="GET">
	<input type="text" name="lol" placeholder="Имя введи, тварь">
	<input type="text" name="loh" placeholder="Имя фамилию, тварь">
	<input type="submit">
</font>
<?
if(isset($_GET['lol'])&&isset($GET['loh'])){

	$a='Vero';
	$b='Belozub';
	if($_GET['lol']==$a && $_GET['loh']==$b){

		require_once 'header.php';?>
		<div class="content">
			<h1><Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.>
		</div>
		
		<?require_once 'footer.php';
	}
}






?>




</body>
</html>


