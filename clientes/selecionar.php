<?php 
include "../includes/cabecalho.php";
include "../includes/conexao.php";
?>
<p class="d-flex justify-content-center">
    <a href="novo.php"><img src="../img/add_person_icon.png" width="35" alt="Adicionar Cliente"></a></a>
</p>
<h2>Lista de clientes</h2>
<table class="table table-striped-columns">
    <tr class="table-dark">
        <td>Código</td>
        <td>Nome</td>
        <td>Cidade</td>
        <td>Estado</td>
        <td>Peso</td>
        <td>Altura</td>
        <td>Data de Nascimento</td>
        <td>Data da Ultima Consulta</td>
        <td>Ações</td>
    </tr>
    <?php 
    $sql = "select * from t_cliente";
    $todos_os_clientes = mysqli_query($conexao, $sql);
    while($um_cliente = mysqli_fetch_assoc($todos_os_clientes)):
        ?>
        <tr>
            <td><?php echo $um_cliente['codigo']; ?></td>
            <td><?php echo $um_cliente['nome'];?></td>
            <td><?php echo $um_cliente['cidade'];?></td>
            <td><?php echo $um_cliente['estado'];?></td>
            <td><?php echo $um_cliente['peso'];?></td>
            <td><?php echo $um_cliente['altura'];?></td>
            <td><?php echo date('d/m/Y', strtotime($um_cliente['data_nascimento']));?></td>
            <td><?php echo date('d/m/Y', strtotime($um_cliente['data_ultima_consulta']));?></td>
            <td>
                <a href="visualizar.php?codigo=<?php echo $um_cliente['codigo'];?>" title="Ver completo"><img src="../img/eye_icon.png" width="26"></a>
                <a href="editar.php?codigo=<?php echo $um_cliente['codigo'];?>"><img src="../img/edit_user_icon.png" width="25"></a>
                <a href="deletar.php?codigo=<?php echo $um_cliente['codigo'];?>"><img src="../img/remove_users_icon .png" width="27"></a>
            </td>
        </tr>
        <?php
    endwhile;
    ?>
</table>
<?php 
mysqli_close($conexao);
include "../includes/rodape.php";
?>