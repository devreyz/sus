<?php
echo "<script src='./js/sweetalert2.js'></script>";
echo "<script src='./js/custom.js'></script>";
switch ($_REQUEST["acao"]) {
    case 'cad':
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $date_nasc = $_POST["date_nasc"];

        $sql = "INSERT INTO users (name, email, password, date_nasc) VALUES ('{$name}', '{$email}', '{$pass}', '{$date_nasc}')";

        $res = $conn->query($sql);

        if ($res) {
            echo "<script>window.onload = () => sweetalert('Usuário cadastrado com sucesso!', 'success', '?page=list', 'Listar Usuários')</script>";
        } else {
            echo "<script>window.onload = () => sweetalert('Não foi possível fazer o cadastro', 'error', '?page=cad', 'Tentar Novamente')</script>";
        }



        break;
    case 'edit':
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $date_nasc = $_POST["date_nasc"];

        $sql = "UPDATE users SET
            name='{$name}',
            email='{$email}',
            password='{$pass}',
            date_nasc='{$date_nasc}'
            WHERE 
                id='{$_REQUEST["id"]}'";
        $res = $conn->query($sql);

        if ($res) {
           echo "<script>window.onload = () => sweetalert('Dados editados com sucesso!', 'success', '?page=list', 'Listar Usuários')</script>";
        } else {
            echo "<script>window.onload = () => sweetalert('Não foi possível editar os dados', 'error', '?page=cad', 'Tentar Novamente')</script>";
        }

        break;
    case 'del':
        $sql = "DELETE FROM users WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);
        if ($res) {
            echo "<script>window.onload = () => sweetalert('Excluído com sucesso!', 'success', '?page=list', 'Listar Usuários', '?page=list')</script>";
        } else {
            echo "<script>window.onload = () => sweetalert('Erro ao apagar usuário', 'error', '?page=cad', 'Tentar Novamente')</script>";
        }
        break;
}
?>