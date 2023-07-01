<?php 
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$codigo = $_GET['codigo'];

$nome = "";
$cidade = "";
$estado = "";
$peso = "";
$altura = "";
$data_nascimento = "";
$data_ultima_consulta = "";
$sql = "select * from t_cliente where codigo = $codigo";
$todos_os_clientes = mysqli_query($conexao, $sql);
while($um_cliente = mysqli_fetch_assoc($todos_os_clientes)):
    $nome = $um_cliente['nome'];
    $cidade = $um_cliente['cidade'];
    $estado = $um_cliente['estado'];
    $peso = $um_cliente['peso'];
    $altura = $um_cliente['altura'];
    $data_nascimento = $um_cliente['data_nascimento'];
    $data_ultima_consulta = $um_cliente['data_ultima_consulta'];
endwhile;
?>
<h1 class="text-center">Editar cliente <?php echo $codigo; ?></h1>
<div class="d-flex justify-content-center">
    <form action="atualizar.php?codigo=<?php echo $codigo;?>" method="post" class="col-12 col-md-6">
        <div class="mb-3">
            <label for="labelNome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome;?>" required maxlength="100">
        </div>
        <div class="mb-3">
            <label for="labelCidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $cidade;?>" required maxlength="100">
        </div>
        <div class="mb-3">
            <label for="labelEstado" class="form-label">Estado</label>
            <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $estado;?>" required maxlength="2">
        </div>
        <div class="mb-3">
            <label for="labelPeso" class="form-label">Peso</label>
            <input type="text" class="form-control" id="peso" name="peso" value="<?php echo $peso;?>" required maxlength="10">
        </div>
        <div class="mb-3">
            <label for="labelAltura" class="form-label">Altura</label>
            <input type="text" class="form-control" id="altura" name="altura" value="<?php echo $altura;?>" required maxlength="10">
        </div>
        <div class="mb-3">
            <label for="labelDataNascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?php echo $data_nascimento;?>" required maxlength="50">
        </div>
        <div class="mb-3">
            <label for="labelDataUltimaConsulta" class="form-label">Data da Ultima Consulta</label>
            <input type="date" class="form-control" id="data_ultima_consulta" name="data_ultima_consulta" value="<?php echo $data_ultima_consulta;?>" required maxlength="50">
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>

<?php 
mysqli_close($conexao);
include "../includes/rodape.php";
?>