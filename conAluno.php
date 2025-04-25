<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> </title>

<body>
<a href="index.php"> Voltar. </a>
<?php

            require_once('conn.php');
        	
        	$sql=mysqli_query($conn,"SELECT * FROM tbaluno");
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        	$id=$linha['ra'];
        	$nome=$linha['nomeAluno'];
        	
        	echo"<p>";
        	
        	echo "<table><tr><td>Código do Aluno: </td><td>$id</td><tr>";
        	echo "<tr><td>Nome do Aluno: </td><td>$nome</td><tr> <br><br>";

          
			
        	}
        	
        	?>

        </body>
        </head>