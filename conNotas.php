<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta de Notas</title>

<body>
 <a href="index.php"> Voltar. </a>
<?php

            require_once('conn.php');
        	
        	$sql=mysqli_query($conn,"SELECT * FROM tbnotas");
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        	$idAl=$linha['ra'];
        	$idProf=$linha['id_professor'];
        	$idDisc =$linha['idDisciplina'];
        	$nota =$linha['nota'];
        	$faltas =$linha ['faltas'];
        	
        	echo"<p>";
        	
        	echo "<table><tr><td>Ra do Aluno: </td><td>$idAl</td><tr>";
        	echo "<tr><td>Código do Professor: </td><td>$idProf</td><tr> <br><br>";
        	echo "<tr><td>Código da Disciplina: </td><td>$idDisc</td><tr> <br><br>";
        	echo "<tr><td>Nota do Aluno: </td><td>$nota</td><tr> <br><br>";
        	echo "<tr><td>Faltas: </td><td>$faltas</td><tr> <br><br>";
			
        	}
        	
        	?>

       
</head>
</body>
</html>