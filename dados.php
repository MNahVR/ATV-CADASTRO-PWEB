<?php

require_once "usuario.php";
    $usuarios = usuario::listUsuario();

function logOut(){
    session_destroy();
    header("Location: /");
}
?>
<!Doctype html>

<html lang="e">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Listar Dados
        </title>    
    </head>

    <body>
        <div class="container">
            <section>
                <form action="?tela=dados" methos="GET">
                    <label for="listUsuario">Listar usuários:</label>
                </form>
                        <tr>
                            <td><?= $value->getNome() ?></td>
                            <td><?= $value->getTelefone() ?></td>

                        </tr>
                    php?>
                </table>
                <form action="?class=usuario&action=logout" method="post" required>
                    <button type="submit">Sair</button>
                    </form>
            </section>
        </div>
    </body>
<html>