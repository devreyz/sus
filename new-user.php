<h1>Novo Usuário</h1>
<form action="?page=save" method="POST">
    <input type="hidden" name="acao" value="cad">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="pass">Senha</label>
        <input type="password" name="pass" class="form-control">
    </div>
    <div class="mb-3">
        <label for="date_nasc">Data de Nascimento</label>
        <input type="date" name="date_nasc" class="form-control">
    </div>
    <div class="mb-3">

        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>