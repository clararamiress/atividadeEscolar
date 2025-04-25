<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta de Alunos</title>
<body>
 <a href="index.php"> Voltar. </a>
<?php

            require_once('conn.php');
        	
        	$sql=mysqli_query($conn,"SELECT * FROM tbProfessor");
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        	$id=$linha['id_professor'];
        	$nome=$linha['nomeProfessor'];
        	
        	echo"<p>";
        	
        	echo "<table><tr><td>Código do Professor: </td><td>$id</td><tr>";
        	echo "<tr><td>Nome do Professor: </td><td>$nome</td><tr> <br><br>";

          
			
        	}
        	
        	?>
        	
       
</head>
</body>
</html>