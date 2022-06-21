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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cadastrar</title>
</head>
<body>
    <div class="content">
        <div class="holdForm">
            <a href="index.php" class="arrow">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <h1>Singup</h1>
            <form method="post">
            <div class="wrap-input">
                <input class="input-form" type="text" name="nome" maxlength="40">
                <span class="focus-input-form" placeholder="Name"></span>
            </div>
            <div class="wrap-input">
                <input class="input-form" type="text" name="telefone" maxlength="10">
                <span class="focus-input-form" placeholder="Phone"></span>
            </div>
            <div class="wrap-input">
                <input class="input-form" type="email" name="email" maxlength="50">
                <span class="focus-input-form" placeholder="E-mail"></span>
            </div>
            <div class="wrap-input">
                <input class="input-form" type="password" name="senha" maxlength="15">
                <span class="focus-input-form" placeholder="Password"></span>
            </div>
            <div class="wrap-input">
                <input class="input-form" type="password" name="confSenha" maxlength="15">
                <span class="focus-input-form" placeholder="Confirm Password"></span>
            </div>
            <input class="btn-form" type="submit" value="CADASTRAR">
            </form>
        </div>
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