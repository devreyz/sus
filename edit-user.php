<h1>Editar Usuário</h1>
<?php
$id = $_REQUEST["id"];
$sql = "SELECT * FROM users WHERE id=" . $id;

$res = $conn->query($sql);
$row = $res->fetch_object();

?>

<form action="?page=save" method="POST">
    <input type="hidden" name="acao" value="edit">
    <input type="hidden" name="id" value="<?= $row->id ?>">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" name="name" class="form-control" value="<?= $row->name ?>">
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="<?= $row->email ?>">
    </div>
    <div class="mb-3">
        <label for="pass">Senha</label>
        <input type="password" name="pass" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="date_nasc">Data de Nascimento</label>
        <input type="date" name="date_nasc" class="form-control" value="<?= $row->date_nasc ?>">
    </div>
    <div class="mb-3">

        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>