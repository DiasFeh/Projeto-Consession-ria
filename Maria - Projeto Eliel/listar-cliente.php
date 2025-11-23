<h1>Listar Cliente</h1>

<?php

    // Comando SQL para selecionar todos os registros da tabela "cliente"
    $sql = "SELECT * FROM cliente";

    // Executa o comando SQL no banco através da conexão $conn
    $res = $conn->query($sql);

    // Conta quantas linhas (registros) foram retornadas pela consulta
    $qtd = $res->num_rows;

    // Verifica se encontrou algum registro
    if($qtd > 0){

        // Exibe quantos resultados foram encontrados
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

        // Inicia a tabela com classes do Bootstrap (estilo)
        print "<table class='table table-bordered table-striped table-hover'>";
        
        // Cabeçalho da tabela (títulos das colunas)
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>CPF</th>";
        print "<th>E-mail</th>";
        print "<th>Telefone</th>";
        print "<th>Endereço</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Ações</th>";
        print "</tr>";

        // Loop que percorre cada registro retornado do banco
        // fetch_object() transforma cada linha em um OBJETO PHP
        while( $row = $res->fetch_object() ){

            print "<tr>";

            // Cada célula da tabela recebe um campo do banco
            print "<td>".$row->id_cliente."</td>";
            print "<td>".$row->nome_cliente."</td>";
            print "<td>".$row->cpf_cliente."</td>";
            print "<td>".$row->email_cliente."</td>";
            print "<td>".$row->telefone_cliente."</td>";
            print "<td>".$row->endereco_cliente."</td>";
            print "<td>".$row->dt_nasc_cliente."</td>";

            // Coluna Ações
            print "<td>";

            // Botão EDITAR — envia para a página de edição com o id do cliente na URL
            print "<button class='btn btn-success' onclick=\"
                location.href='?page=editar-cliente&id_cliente=".$row->id_cliente."';\">
                Editar
            </button>";

            // Botão EXCLUIR — pergunta antes de excluir, e envia para a página "salvar-cliente" com ação excluir
            print " <button class='btn btn-danger' onclick=\"
                if(confirm('Tem certeza que deseja excluir?')){
                    location.href='?page=salvar-cliente&acao=excluir&id_cliente=".$row->id_cliente."';
                }else{
                    false;
                }\">
                Excluir
            </button>";

            print "</td>";
            print "</tr>";
        }

        print "</table>";

    }else{
        // Caso não encontre nenhum registro no banco
        print "<p>Não encontrou resultado</p>";
    }
?>

