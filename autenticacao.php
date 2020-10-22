<?php
require_once "./inc/config.php";
$con = new PDO(SERVIDOR, USUARIO, SENHA);
if (isset($_POST['cadastrar'])) {
    if (isset($_POST)) {
        $sql = $con->prepare("INSERT INTO `usuario`(`id`,`nome`, `email`, `telefone`, `cpf`,`senha`) VALUES (null ,?,?,?,?,?) ");
        $sql->execute(array($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['cpf'], SHA1($_POST['senha'])));
    }
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);
    $_SESSION['msg'] = " <div class='alert alert-success'>  <strong>Sucesso!</strong> Usuario cadastrado!   </div>";
    header("Location: ./dados.php");
} elseif (isset($_POST['entrar'])) {


    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = $con->prepare("SELECT * FROM usuario WHERE email=? AND senha=?");
    $sql->execute([$email, SHA1($senha)]);

    $row = $sql->fetchObject();

    if ($row) {
        $_SESSION['usuario'] = $row;
        header("Location: ./pagina1.php");
    } else {
        $_SESSION['msg'] = " <div class='alert alert-danger'>  <strong>ERRO!</strong> Usuario não encontrado!!!   </div>";
        header("Location: ./dados.php");
    }
} else {
    $_SESSION['msg'] = " <div class='alert alert-danger'>  <strong>ERRO!</strong> Algo deu errado!  </div>";
    header("Location: ./dados.php");
}
