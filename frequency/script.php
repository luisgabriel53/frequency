<!DOCTYPE html>
<html>
	<head>
		<title>Resultados</title>
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>
	<body> 
		<center>
			<div id="campores">
				<?php
				$sala = $_POST['sala'];
				$dia = preg_replace("([^0-9/])", "", $_POST['dia']);

				$alunosfalt = $_POST['alunos'];
$host = 'root';
$password = '';
$connection = mysql_connect($db, $host, $password);
$db = mysql_select_db('frequency');
				$result_usuario = "INSERT INTO faltas (sala, dia, alunosfalt) VALUES ('$sala', '$dia', '$alunosfalt')";
				
				$resultado_usuario = mysql_query( $result_usuario, $connection);

				if($resultado_usuario) {
					echo "<script language='javascript' type='text/javascript'>
        alert('Dados enviados!');window.location
        .href='system.html';</script>";
				} else {
					echo "<script language='javascript' type='text/javascript'>
        alert('Dados não enviados, tente novamente.');window.location
        .href='system.html';</script>";
				}
				?>
			</div>
		</center>
	</body>
</html>

