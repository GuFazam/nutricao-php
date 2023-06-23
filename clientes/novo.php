<?php 
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<h1>Novo cliente</h1>
<p>Vamos cadastrar um cliente novo no sistema</p>
<form action="inserir.php" method="post">
<br>
nome: <input type="text" name="nome" required maxlength="100">
<br>
cidade: <input type="text" name="cidade" required maxlength="100">
<br>
estado: <input type="text" name="estado" required maxlength="2">
<br>
peso: <input type="number" name="peso" required maxlength="10">
<br>
altura: <input type="text" name="altura" required maxlength="10">
<br>
data de nascimento: <input type="date" name="data_nascimento" required maxlength="50">
<br>
data da ultima consulta: <input type="date" name="data_ultima_consulta" required maxlength="50">
<br>
<button type="submit">Salvar</button>
</form>
<?php 
include "../includes/rodape.php";
?>