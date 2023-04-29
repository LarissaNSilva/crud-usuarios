<?php

    include("../conexao.php");

    $id = $_GET['id'];

    $nome_completo = $_POST['nome_completo'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $apelido = $_POST['apelido'];
    $telefone1 = $_POST['telefone1'];
    $telefone2 = $_POST['telefone2'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero_endereco'];
    $complemento = $_POST['complemento'];
    
    $url_img = $_POST['avatar'];
    $avatar = substr($url_img, 3);

    $sql = "UPDATE 
                cadastro 
            SET
                `nome_completo` = '$nome_completo',
                `email` = '$email',
                `idade` = '$idade',
                `apelido` = '$apelido',
                `telefone_um` = '$telefone1',
                `telefone_dois` = '$telefone2',
                `cep` = '$cep',
                `cidade` = '$cidade',
                `bairro` = '$bairro',
                `endereco` = '$endereco',
                `numero` = '$numero',
                `complemento` = '$complemento' ,
                `avatar`= '$avatar'
            WHERE id = '$id'";

    $update = $sqli->query($sql);

    if ($update) {

        $result = $sqli->affected_rows;
        header("location:../index.php");
    }

?>