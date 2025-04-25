<?php
    require_once("conn.php");
    $Disciplina = $_POST['txtDisci'];
    $cargaHr = $_POST['txtCargaHr'];

    $sqlDisciplina = "INSERT INTO tbdisciplinas(nomeDisci) VALUES ('$Disciplina','$cargaHr')";
    $resultadoDisc= mysqli_query($conn, $sqlDisciplina);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
            <script type=\"text/javascript\">
                alert(\"Aluno cadastrado com Sucesso. \");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadDisciplina.php'>
        <script type=\"text/javascript\">
                alert(\"A disciplina não foi cadastrada com Sucesso \");
        </script>
        ";
    }
?>