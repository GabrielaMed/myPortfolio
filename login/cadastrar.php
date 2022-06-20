<?php
    require_once 'usuarios.php';
    $usuario = new Usuario();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastrar</title>
</head>
<body>
    <div id="corpo-form-cad">
        <h1>CADASTRAR</h1>
        <form method="post">
            <input class="input" type="text" name="nome" placeholder="Nome Completo" maxlength="40">
            <input class="input" type="text" name="telefone" placeholder="Telefone" maxlength="10">
            <input class="input" type="email" name="email" placeholder="E-mail do Usuário" maxlength="50">
            <input class="input" type="password" name="senha" placeholder="Senha" maxlength="15">
            <input class="input" type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
            <input class="input" type="submit" value="CADASTRAR">
        </form>
    </div>

    <?php
        if(isset($_POST['nome']))
        {
            $nome = addslashes($_POST['nome']);
            $telefone = addslashes($_POST['telefone']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            $confirmarSenha = addslashes($_POST['confSenha']);

            // verifica se todos os campos estão preenchidos

            if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
            {
                $usuario->connect("login57", "localhost", "root", "");
                if($usuario->msgError == "")// Significa que conectou
                {
                    if($senha == $confirmarSenha)
                    {
                        if($usuario->cadastrar($nome, $telefone, $email, $senha))
                        {
                            ?>

                                <div class="msg">
                                    Cadastrado com sucesso
                                </div>

                            <?php
                        }
                        else
                        {
                            ?>

                                <div class="msg">
                                    Email já cadastrado!
                                </div>

                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <div class="msg">
                                Senhas não correspondem!
                            </div>

                        <?php
                    }
                }
                else
                {
                    ?>
                        <div class="msg">
                            <?php echo "Erro: ".$usuario->msgError ?>
                        </div>

                    <?php
                }
            }
            else
            {
                ?>
                    <div class="msg">
                        Algum campo não foi preenchido!
                    </div>

                <?php
            }
        }
    ?>
</body>
</html>