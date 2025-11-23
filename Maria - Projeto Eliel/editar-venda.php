<h1>Editar Funcionário</h1>
<?php
    $sql = "SELECT * FROM venda 
            WHERE id_venda =".$_REQUEST["id_venda"];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>

<form action="?page=salvar-venda" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_venda" value="<?php print $row->id_venda; ?>">

    <div class="mb-3">
        <label>Data
            <input type="date" name="data_venda" class="form-control" value="<?php print $row->data_venda; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Valor da venda
            <input type="number" name="valor_venda" class="form-control" value="<?php print $row->valor_venda; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Nome do Cliente
            <input type="text" name="cliente_id_cliente" class="form-control" value="<?php print $row->cliente_id_cliente; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Nome do Funcionário
            <input type="text" name="funcionario_id_funcionario" class="form-control" value="<?php print $row->funcionario_id_funcionario; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Modelo
            <input type="text" name="modelo_id_modelo" class="form-control" value="<?php print $row->modelo_id_modelo; ?>">
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
