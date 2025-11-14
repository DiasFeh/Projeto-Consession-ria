<h1>Listar venda</h1>
<?php

    $sql = "SELECT * FROM venda";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Telefone</th>";
        print "<th>Ações</th>";
        print "</tr>";

        while( $row = $res->fetch_object() ){
            print "<tr>";
            print "<td>".$row->id_venda."</td>";
            print "<td>".$row->nome_venda."</td>";
            print "<td>".$row->email_venda."</td>";
            print "<td>".$row->telefone_venda."</td>";
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
