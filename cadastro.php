<?php
?>

<!Doctype html lang="e">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>
            Cadastro
        </title>

        <script type="text/javascript">
            function validar(){
                var nome = formul.nome.value;
                var telefone = formul.fone.value;
                
                if(nome == ""){
                    alert('Preencha o campo nome completo');
                    formul.nome.focus();
                    return false;
                }
                if(telefone == ""){
                    alert('Preencha o campo telefone de usuário');
                    formul.fone.focus();
                    return false;
                }
            }
        </script>
    </head>

    <body>
        <p>------------------------------ Cadastro ------------------------------</p>
        <div id="area" class="center-form">
            <form name = "formul" id="formulario" autocomplete="off" action="?class=usuario&action=sigup" method="post">
                <fieldset>
                    <div>
                        <font>-Nome:</font></b>
                        <input type="text" name="nome" id="iNome">
                    </div>    
                    <div>
                        <font>-Telefone:</font></b>
                        <input type="text" name="fone" id="iFone">
                    </div>
                    <br>
                    <button class="bt" onclick="return validar()">Enviar</button>
                    <div class="vocative">
                        <span>Já tem cadastro</span>
                        <a href="listagem.php">Listar usuários</a>
                    </div>    
                </fieldset>
            </form>
        </div>
    </body>
</html>