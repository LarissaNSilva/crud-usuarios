<?php

    include("../conexao.php");

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

    if(!empty($nome_completo)){

        $sql = "INSERT INTO cadastro (`nome_completo`,
                                    `email`,
                                    `idade`,
                                    `apelido`,
                                    `telefone_um`,
                                    `telefone_dois`,
                                    `cep`,
                                    `cidade`,
                                    `bairro`,
                                    `endereco`,
                                    `numero`,
                                    `complemento`,
                                    `avatar`)
                VALUES ('".$nome_completo."', '".$email."', '".$idade."', '".$apelido."', '".$telefone1."', '".$telefone2."', '".$cep."', '".$cidade."', '".$bairro."', '".$endereco."', '".$numero."', '".$complemento."', '".$avatar."')";
            
        $insert = $sqli->query($sql);

        if ($insert) {
            $result = $sqli->affected_rows;
            header("location:../index.php");        
        }

    } else {
        header("location:../index.php");          
    }


    






















?>