<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<h1 class="text-center">Novo cliente</h1>
<p class="text-center">Vamos cadastrar um cliente novo no sistema</p>
<div class="d-flex justify-content-center">
    <form action="inserir.php" method="post" class="col-12 col-md-6">
        <div class="mb-3">
            <label for="labelNome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required maxlength="100">
        </div>
        <div class="mb-3">
            <label for="labelCidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" required maxlength="100">
        </div>
        <div class="mb-3">
            <label for="labelEstado" class="form-label">Estado</label>
            <input type="text" class="form-control" id="estado" name="estado" required maxlength="2">
        </div>
        <div class="mb-3">
            <label for="labelPeso" class="form-label">Peso</label>
            <input type="text" class="form-control" id="peso" name="peso" required maxlength="10">
        </div>
        <div class="mb-3">
            <label for="labelAltura" class="form-label">Altura</label>
            <input type="text" class="form-control" id="altura" name="altura" required maxlength="10">
        </div>
        <div class="mb-3">
            <label for="labelDataNascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required maxlength="50">
        </div>
        <div class="mb-3">
            <label for="labelDataUltimaConsulta" class="form-label">Data da Ultima Consulta</label>
            <input type="date" class="form-control" id="data_ultima_consulta" name="data_ultima_consulta" required maxlength="50">
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
<?php
include "../includes/rodape.php";
?>