<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Notas</title>
</head>
<body>
 <a href="index.php"> Voltar. </a> <br/><br/><br/>
	<form method="POST" action="processaCadNotas.php">
       Ra do aluno: <input type="text" name="txtRa" id="txtRa"><br><br> 
       Professor: <input type="text" name="txtPro" id="txtPro"><br><br>
       
        Disciplina: <input type="text" name="txtDisc" id="txtDisc"><br><br>
        
         Notas: <input type="text" name="txtNota" id="txtNota"><br><br>
        
      Faltas: <input type="text" name="txtFalta" id="txtFalta"><br><br>

      <input type="submit" value="Cadrastar">
        
    </form>

</body>
</html>