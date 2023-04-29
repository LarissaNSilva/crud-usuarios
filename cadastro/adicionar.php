<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastro | Adicionar</title>
    <link rel="icon" type="image/png"  href="../assets/img/icone-cadastro.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/style-cadastro.css" media="screen" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <div class="botao-menu">
        <a href="../index.php" id="menu" ><i class="bi bi-box-arrow-in-left"></i></a>
    </div>

</head>
    <body>
        <header>	
            <div class="titulo_form">
                <h2>CADASTRO | Adicionar</h2>
            </div>
        </header>
        <div class="container">
            <form class="row g-3" method="POST" action="processa_add.php">
                <div class ="container-form row g-3">
            
                    <div class="col-md-12">
                        <label for="inputNome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="nome_completo" name="nome_completo" value="">
                    </div>
                    
                    <div class="col-6">
                        <label for="inputEmail" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="">
                    </div> 

                    <div class="col-md-2">
                        <label for="inputIdade" class="form-label">Idade</label>
                        <input type="text" class="form-control" id="idade" name="idade" onkeypress="return isNumber(event)">
                    </div>

                    <div class="col-4">
                        <label for="inputApelido" class="form-label">Apelido</label>
                        <input type="text" class="form-control" id="apelido" name="apelido" placeholder="">
                    </div> 

                    <div class="col-md-6">
                        <label for="inputTelefone1" class="form-label">Telefone 1</label>
                        <input type="text" class="form-control" name="telefone1" id="telefone1">
                    </div>

                    <div class="col-md-6">
                        <label for="inputTelefone2" class="form-label">Telefone 2</label>
                        <input type="text" class="form-control"  name="telefone2" id="telefone2">
                    </div>

                    <div class="col-4">
                        <label for="inputCep" class="form-label">CEP</label>
                        <input type="text" class="form-control" size="15" maxlength="20"  name="cep" id="cep" placeholder="">
                    </div>

                    <div class="col-4">
                        <label for="inputCidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="cidade"  name="cidade" placeholder="">
                    </div>

                    <div class="col-4">
                        <label for="inputBairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="bairro"  name="bairro" placeholder="">
                    </div>

                    <div class="col-8">
                        <label for="inputEndereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco"  name="endereco" placeholder="">
                    </div>

                    <div class="col-md-2">
                        <label for="inputNumero" class="form-label">Nº</label>
                        <input type="text" class="form-control" id="numero_endereco"  name="numero_endereco" onkeypress="return isNumber(event)">
                    </div>

                    <div class="col-2">
                        <label for="inputComplemento" class="form-label" style="font-size:12pt;">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento" placeholder="">
                    </div>

                </div>

                <div class="container-avatar-format">

                    <label id="label-avatar">Por fim, escolha seu avatar:</label>
                    <input type="hidden" id="avatar" name="avatar" value="">
                    <div class="container-avatar-1">

                        <div class="avatar" id="avatar-1" onclick="escolherAvatar1()">
                            <img  class="img-avatar" alt="avatar-1" src= "../assets/img/avatar/icon-avatar-1.png">
                        </div>

                        <div class="avatar" id="avatar-2" onclick="escolherAvatar2()">
                            <img  class="img-avatar" alt="avatar-2"  src= "../assets/img/avatar/icon-avatar-2.png">
                        </div>

                        <div class="avatar" id="avatar-3" onclick="escolherAvatar3()">
                            <img  class="img-avatar" alt="avatar-3" src= "../assets/img/avatar/icon-avatar-3.png">
                        </div>

                    </div>
                    <div class="container-avatar-2">

                        <div class="avatar" id="avatar-4" onclick="escolherAvatar4()">
                            <img  class="img-avatar" alt="avatar-4"  src= "../assets/img/avatar/icon-avatar-4.png">
                        </div>

                        <div class="avatar" id="avatar-5" onclick="escolherAvatar5()">
                            <img  class="img-avatar" alt="avatar-5" src= "../assets/img/avatar/icon-avatar-5.png">
                        </div>

                        <div class="avatar" id="avatar-6" onclick="escolherAvatar6()">
                            <img  class="img-avatar" alt="avatar-6" src= "../assets/img/avatar/icon-avatar-6.png">
                        </div>

                    </div>

                </div>

                <div class="col-12" style="text-align: right; margin-top: 60px;">
                    <button type="submit" id="button-adicionar" class="btn btn-secondary">SALVAR</button>
                </div>
                
            </form>
        </div>
    </body>
</html>
<script src="../assets/js/cadastro_add.js"></script>





