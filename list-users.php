<h1>Listar Usuários</h1>
<?php
echo "<script src='./js/sweetalert2.js'></script>";
echo "<script src='./js/custom.js'></script>";

$sql = "SELECT * FROM users";
$res = $conn->query($sql);

$qtd = $res->num_rows;
if ($qtd > 0) {
    echo '<table class="table table-hover table-striped table-bordered">';
    echo "<tr>";
    echo "<td>#</td>";
    echo "<td>Nome</td>";
    echo "<td>E-mail</td>";
    echo "<td>Data de Nascimento</td>";
    echo "<td>Ações</td>";
    echo "</tr>";
    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>" . $row->id . "</td>";
        echo "<td>" . $row->name . "</td>";
        echo "<td>" . $row->email . "</td>";
        echo "<td>" . $row->date_nasc . "</td>";
        echo "<td>
        <button onclick=\"location.href='?page=edit-user&id=" . $row->id . "'\" class='btn btn-success'>Editar</button>
        <button onclick=\"
        deletar('?page=save&acao=del&id=" . $row->id . "')
        \" class='btn btn-danger'>Excluir</button>
       
        </td>";
        echo "</tr>";
    }
    echo '</table>';
}

?>
<!-- <button onclick=\"\" class='btn btn-danger'>Excluir</button>-->