<?php

    include("../conexao.php");

    $id = $_POST['id'];
    $sql = "DELETE FROM cadastro WHERE id = '$id'";

    if ($sqli->query($sql)) {
            $mensagem = "Sucesso!";
    }
    if ($sqli→errno) {
        $mensagem = "Error!".$mysqli→error."";
    }

?>