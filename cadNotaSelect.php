<?php


require_once("conn.php");
?>
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
        <select name="selectAluno">
            <option>Selecione o Aluno</option>
            <?php
                $sqlAlunos = "SELECT * FROM tbaluno";
                $resultadoAlunos = mysqli_query($conn, $sqlAlunos);
                while($rowAlunos = mysqli_fetch_assoc($resultadoAlunos)){
                    ?>
                    <option value="<?php echo $rowAlunos['ra']; ?>"><?php echo $rowAlunos['nomeAluno']; ?><?php
                }
            ?>
        </select><br><br>

    <form method="POST" action="processaCadNotas.php">
        <select name="selectProfessor">
            <option>Selecione o Professor</option>
            <?php
                $sqlProfessor = "SELECT * FROM tbprofessor";
                $resultadoProfessor = mysqli_query($conn, $sqlProfessor);
                while($rowProfessor = mysqli_fetch_assoc($resultadoProfessor)){
                    ?>
                    <option value="<?php echo $rowProfessor['id_professor']; ?>"><?php echo $rowProfessor['nomeProfessor']; ?><?php
                }
            ?>
        </select><br><br>

    <form method="POST" action="processaCadNotas.php">
        <select name="selectDisc">
            <option>Selecione a Disciplina</option>
            <?php
                $sqlDisc = "SELECT * FROM tbdisciplinas";
                $resultadoDisc = mysqli_query($conn, $sqlDisc);
                while($rowDisc = mysqli_fetch_assoc($resultadoDisc)){
                    ?>
                    <option value="<?php echo $rowDisc['idDisciplina']; ?>"> <?php echo $rowDisc['nomeDisci']; ?><?php
                }
            ?>
        </select><br><br>
    
    Notas: <input type="text" name="txtNota" id="txtNota"><br><br>
        
    Faltas: <input type="text" name="txtFalta" id="txtFalta"><br><br>

    <input type="submit" value="Cadrastar">
        
    </form>

</body>
</html>