<?php

    include("conexao.php");

    $sql 		= " SELECT * FROM cadastro";
	$select 	= $sqli->query($sql);
	$result = $select->fetch_all(MYSQLI_ASSOC);



?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Usuários</title>
  <link rel="icon" type="image/png"  href="assets/img/icone-usuarios.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style-consulta.css" media="screen" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <div class="botao-menu">
    <a href="cadastro/adicionar.php" id="menu"><i class="bi bi-person-plus icon-format"></i></i></a>
  </div>
</head>

<body>
    <header>	
        <div class="titulo_form">
            <h2>LISTA DE USUÁRIOS</h2>
        </div>
    </header>

    <table class="table table-bordered table-format">
        <thead>
            <tr class="tr-format">
                <th scope="col" class="th-format">USUÁRIO(A)</th>
                <th scope="col" class="th-format">E-MAIL</th>
                <th scope="col" class="th-format">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $dados){?> 
                <tr class="tr-format-2">
                    <td class="td-format" id="td-nome"><?php echo $dados['nome_completo']; ?></td>
                    <td class="td-format" id="td-email"><?php echo $dados['email']; ?></td>
                    <td class="td-format" id="td-buttons">
                        <button type="button" class="btn btn-secondary" onclick="showModal('<?php echo $dados['id']; ?>')"  data-toggle="tooltip" data-placement="top" title="Informações do Usuário"><i class="bi bi-info-circle"></i></button>
                        <button type="button" class="btn btn-secondary" onclick="editar('<?php echo $dados['id']; ?>')"  data-toggle="tooltip" data-placement="top" title="Editar"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-secondary" onclick="excluir('<?php echo $dados['id']; ?>')"  data-toggle="tooltip" data-placement="top" title="Excluir"><i class="bi bi-trash3"></i></button>
                    </td>
                </tr>

                <div class="modal modal-lg" tabindex="-1" id="modal-infos_<?php echo $dados['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <div class="avatar" id="avatar-2" onclick="escolherAvatar2()">
                                <img  class="img-avatar" src= "<?php echo $dados['avatar']; ?>">
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" id="close-modal" onclick="closeModal('<?php echo $dados['id']; ?>')"></button>
                        </div>
                        <div class="modal-body">

                            <label class="text-modal">Nome:
                                <?php echo $dados['nome_completo']; ?>
                            </label><br>
                        
                            <label class="text-modal">Idade:
                                <?php echo $dados['idade']; ?>
                            </label><br>

                            <label class="text-modal"> Apelido: 
                                <?php echo $dados['apelido']; ?>
                            </label><br>

                            <label class="text-modal"> <i class="bi bi-telephone-fill"></i> 
                                 <?php echo $dados['telefone_um']; ?> | <?php echo $dados['telefone_dois']; ?>
                            </label><br>

                            <label class="text-modal"> <i class="bi bi-house-door"></i>
                                <?php echo $dados['endereco'] . ', ';?> <?php echo $dados['numero']. ',';?><?php echo $dados['complemento']; ?>
                            </label><br>

                            <label class="text-modal"> <i class="bi bi-geo-alt"></i> 
                                <?php echo $dados['bairro'] . ',' ;?> <?php echo $dados['cidade']; ?>
                            </label>

                        </div>
                        <div class="modal-footer">
                        </div>
                        </div>
                    </div>
                </div>
            <?php }?>    
        </tbody>
    </table>
</body>
</html>
<script src="assets/js/consulta.js"></script>
