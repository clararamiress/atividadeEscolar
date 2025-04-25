<?php
    require_once("conn.php");
    $ra = $_POST['selectAluno'];
    $idpro = $_POST['selectProfessor'];
    $iddisc = $_POST['selectDisc'];
    $idnota = $_POST['txtNota'];
    $faltas = $_POST['txtFalta'];



    $sqlNotas = "INSERT INTO tbnotas(ra, id_professor, idDisciplina, nota, faltas ) VALUES ('$ra','$idpro', '$iddisc', '$idnota', '$faltas')";
    $resultadoNotas = mysqli_query ($conn, $sqlNotas);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
            <script type=\"text/javascript\">
                alert(\"Nota Cadastrada com sucesso. \");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadNotas.php'>
        <script type=\"text/javascript\">
                alert(\"A nota não foi cadastrada com Sucesso \");
        </script>
        ";
    }
?>