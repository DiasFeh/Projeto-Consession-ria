<h1>Listar Venda</h1>
<?php
    // trazendo os nomes de outra tabela
    $sql = "SELECT
            v.id_venda,
            v.data_venda,
            v.valor_venda,

            c.nome_cliente,
            f.nome_funcionario,
            m.nome_modelo

            FROM venda AS v
    INNER JOIN cliente AS c
        ON v.cliente_id_cliente = c.id_cliente
    INNER JOIN funcionario AS f 
        ON v.funcionario_id_funcionario = f.id_funcionario
    INNER JOIN modelo AS m
        ON v.modelo_id_modelo = m.id_modelo";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>Data da venda</th>";
        print "<th>ID da venda</th>";
        print "<th>Valor da Venda</th>";
        print "<th>ID do Cliente</th>";
        print "<th>ID do Funcionário</th>";
        print "<th>ID do Modelo</th>";
        print "<th>Ações</th>";
        print "</tr>";

        while( $row = $res->fetch_object() ){
            print "<tr>";
            print "<td>".$row->data_venda."</td>";
            print "<td>".$row->id_venda."</td>";
            print "<td>".$row->valor_venda."</td>"; 
            print "<td>".$row->nome_cliente."</td>"; // exibindo nome de outra tabela
            print "<td>".$row->nome_funcionario."</td>";
            print "<td>".$row->nome_modelo."</td>";
            print "<td>";

            print "<button class='btn btn-success' onclick=\"
                location.href='?page=editar-venda&id_venda=".$row->id_venda."';\">Editar</button>";

            print " <button class='btn btn-danger' onclick=\"
                if(confirm('Tem certeza que deseja excluir?')){
                    location.href='?page=salvar-venda&acao=excluir&id_venda=".$row->id_venda."';
                }else{false;}\">Excluir</button>";

            print "</td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p>Não encontrou resultado</p>";
    }
?>
