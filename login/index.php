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
    <title>Tela Login 57</title>
</head>
<body>
    <div class="holdForm">
        <h1>ENTRAR</h1>
        <form method="post">
            <div class="wrap-input">
                <input type="email" class="input-form" name="email" autocomplete="off">
                <span class="focus-input-form" placeholder="User"></span>
            </div>
            <div class="wrap-input">
                <input type="password" class="input-form" name="senha" autocomplete="off">
                <span class="focus-input-form" placeholder="Password"></span>
            </div>
            <input class="btn-form" type="submit" value="ACESSAR">
            <a href="cadastrar.php">Ainda não é cadastrado? <strong>Cadastre-se!</strong></a>
        </form>
    </div>
    <?php
        if(isset($_POST['email']))
        {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            if(!empty($email) && !empty($senha))
            {
                $usuario->connect("login57", "localhost", "root", "");
                
                if($usuario->msgError == "")
                {
                    if($usuario->logar($email, $senha))
                    {
                        header("location: areaPrivada.php");
                    }
                    else
                    {
                        ?>
                            <div id="msg">
                                Campos não conferem
                            </div>
                        <?php
                    }
                }
                else
                {
                    ?>
                        <div id="msg">
                            <?php echo "Erro de conexão com banco: ".$usuario->msgError?>
                        </div>
                    <?php
                }
            }
            else
            {
                ?>
                    <div id="msg">
                        Preencha todos os campos
                    </div>
                <?php
            }
        }
    ?>
</body>
</html>