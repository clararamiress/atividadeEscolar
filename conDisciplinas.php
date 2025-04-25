<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta Disciplina </title>

<body>
 <a href="index.php"> Voltar. </a>
<?php

            require_once('conn.php');
        	
        	$sql=mysqli_query($conn,"SELECT * FROM tbDisciplinas");
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        	$id=$linha['idDisciplina'];
        	$nome=$linha['nomeDisci'];
        	$cargaHr =$linha['cargaHoraria'];
        	
        	echo"<p>";
        	
        	echo "<table><tr><td>Código da Disciplina: </td><td>$id</td><tr>";
        	echo "<tr><td>Nome da Disciplina: </td><td>$nome</td><tr> <br><br>";
        	echo "<tr><td>Carga Horaria da Disciplina: </td><td>$cargaHr</td><tr> <br><br>";
			
        	}
        	
        	?>

       
</head>
</body>
</html>