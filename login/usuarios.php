<?php
class Usuario
{
    private $pdo;
    public $msgError = "";

    public function connect($name, $host, $user, $password)
    {
        global $pdo;
        try
        {
            $pdo = new PDO("mysql:dbname=".$name, $user, $password);
        }catch(PDOException $e){
            $msgError = $e->getMessage();
        }
    }

    public function cadastrar($nome, $telefone, $email, $senha)
    {
        global $pdo;
        // verificar se o email já está cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if($sql->rowCount()>0)
        {
            return false; // email já cadastrado
        }
        else
        {
            // caso o email não esteja cadastrado, cadastrar agr
            $sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":t", $telefone);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            return true;
        }
    }

    public function logar($email, $senha)
    {
        global $pdo;
        //verificar se email e senha estão corretor
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", md5($senha));
        $sql->execute();
        if($sql->rowCount()>0)
        {
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>