<?php
    require('./db/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserindo Dados</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th,td{
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }
        .oculto{
            display: none;
        }
    </style>
</head>
<body>
    <h1>Aula Inserindo Dados</h1>

    <form id="form-salva" method="post">

        <input type="text" name="nome" placeholder="Digite seu nome" required>
        <input type="email" name="email" placeholder="Digite seu e-mail" required>
        <button type="submit" name="salvar">Salvar</button>

    </form><br>

    <form class="oculto" id="form-atualiza" method="post">

        <input type="hidden" id="id_editado" name="id_editado" placeholder="Editar id" required>
        <input type="text" id="nome_editado" name="nome_editado" placeholder="Editar nome" required>
        <input type="email" id="email_editado" name="email_editado" placeholder="Editar email" required>
        <button type="submit" name="atualizar">Atualizar</button>
        <button type="submit" id="cancelar" name="cancelar">Cancelar</button>

    </form><br>

    <form class="oculto" id="form-deleta" method="post">

        <input type="hidden" id="id_deleta" name="id_deleta" placeholder="id" required>
        <input type="hidden" id="nome_deleta" name="nome_deleta" placeholder="nome" required>
        <input type="hidden" id="email_deleta" name="email_deleta" placeholder="email" required>
        <b>Tem certeza que quer  deletar cliente <span id="cliente"></span>?</b>
        <button type="submit" name="deletar">Confirmar</button>
        <button type="submit" id="cancelar_deleta" name="cancelar_deleta">Cancelar</button>

    </form><br>

    <?php
        require('./db/injection.php');
        require('./db/atualizacao.php');
        require('./db/delete.php');
        require('./db/select.php');
        require('./db/tabela.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        //mostra o form de atualizar dados
        $(".btn-atualizar").click(function(){
            let id = $(this).attr('data-id');
            let nome = $(this).attr('data-nome');
            let email = $(this).attr('data-email');

            $('#form-salva').addClass('oculto');
            $('#form-atualiza').removeClass('oculto');

            $("#id_editado").val(id);
            $("#nome_editado").val(nome);
            $("#email_editado").val(email);
        });

        //mostra o form padrão e esconde o atualizar
        $('#cancelar').click(function(){
            $('#form-salva').removeClass('oculto');
            $('#form-atualiza').addClass('oculto');
        });

        $(".btn-deletar").click(function(){
            let id = $(this).attr('data-id');
            let nome = $(this).attr('data-nome');
            let email = $(this).attr('data-email');

            $("#id_deleta").val(id);
            $("#nome_deleta").val(nome);
            $("#email_deleta").val(email);
            $("#cliente").html(nome);

            $('#form-salva').addClass('oculto');
            $('#form-atualiza').addClass('oculto');
            $('#form-deleta').removeClass('oculto');
        });
    </script>
</body>
</html>