<?php
if (isset($_POST['submit'])) {

    //teste de recebimento dos dados
    /* print_r('nome completo: ' .$_POST['nome']);
  print_r('data_Nascimento: ' .$_POST['data_nascimento']);
  print_r('Email: ' .$_POST['email']);
  print_r('Telefone:' .$_POST['telefone']);*/


    //chama a classe que o nome refere
    include_once('config.php');

    $nome = $_POST['nome'];
    if (empty($_POST['nome'])) {
    }
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];
    $telefone = $_POST['telefone'];


    //insere os dados recebidos no banco
    $result = mysqli_query($connect, "INSERT INTO usuarios(nome,email,data_nascimento,telefone)
VALUES ('$nome','$email','$data_nascimento','$telefone')");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compre Já</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row" style="margin:30px 0">
            <div class="col-lg-3">
                <img src="img/logo.png" class="img-thumbnail">
            </div>
            <div class="col-lg-9">
                <h3>Nome do Produto</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6" id="form-container">
                <form id="step_1" class="form-step" action="index.php" method="POST">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Preencha seus dados para receber contato
                            </div>
                        </div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row form-group">
                                    <div class="col-lg-6">
                                        <label>Nome Completo</label>
                                        <input id="nome" class="form-control" type="text" name="nome" required>
                                    </div>

                                    <div class="col-lg-6">
                                        <label>Data de Nascimento</label>
                                        <input class="form-control" type="date" name="data_nascimento" required>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-lg-6">
                                        <label>Email</label>
                                        <input class="form-control" type="text" name="email" required>
                                    </div>

                                    <div class="col-lg-6">
                                        <label>Telefone</label>
                                        <input class="form-control" type="text" name="telefone" required>
                                    </div>
                                </div>

                                <div>
                                    <button input type="submit" type="submit" id="submit" name="submit" class="btn btn-primary" class="btn btn-lg btn-info next-step">Próximo Passo</button>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </form>
                <form id="step_2" class="form-step" style="display:none">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Preencha seus dados para receber contato
                            </div>
                        </div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row form-group">
                                    <div class="col-lg-6">
                                        <label>Região</label>
                                        <select class="form-control" name="regiao">
                                            <option value="">Selecione a sua região</option>
                                            <option>Sul</option>
                                            <option>Sudeste</option>
                                            <option>Centro-Oeste</option>
                                            <option>Nordeste</option>
                                            <option>Norte</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <label>Unidade</label>
                                        <select class="form-control" name="unidade">
                                            <option value="">Selecione a unidade mais próxima</option>
                                            <option>???</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-lg btn-info next-step">Enviar</button>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </form>

                <div id="step_sucesso" class="form-step" style="display:none">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Obrigado pelo cadastro!
                            </div>
                        </div>
                        <div class="panel-body">
                            Em breve você receberá uma ligação com mais informações!
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h1>Chamada interessante para o produto</h1>
                <h2>Mais uma informação relevante</h2>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $('.next-step').click(function(event) {
                event.preventDefault();
                $(this).parents('.form-step').hide().next().show();
            });
        });
    </script>
    <script>
        //validação para o nome.
        function validate() {
            /*    value = document.getElementById("nome").value;
              const Regex = /^(?i:[a-z]+ [a-z ]+)$/*/

            /* let value = document.getElementById("nome").value;
              let re = /^[a-zA-ZéúíóáÉÚÍÓÁèùìòàçÇÈÙÌÒÀõãñÕÃÑêûîôâÊÛÎÔÂëÿüïöäËYÜÏÖÄ\-\ \s]+$/;
               if(!Regex.test(value)) {
                   return false;
               }*/
        }
    </script>
</body>

</html>