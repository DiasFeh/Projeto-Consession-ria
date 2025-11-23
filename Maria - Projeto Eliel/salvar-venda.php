<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$data_venda = $_POST['data_venda'];
			$valor_venda = $_POST['valor_venda'];
            $cliente_id = $_POST['cliente_id_cliente'];
            $funcionario_id = $_POST['funcionario_id_funcionario'];
            $modelo_id = $_POST['modelo_id_modelo'];

			
			$sql = "INSERT INTO venda (data_venda, valor_venda, cliente_id_cliente, funcionario_id_funcionario, modelo_id_modelo) 
            VALUES ('{$data_venda}', '{$valor_venda}', '{$cliente_id}', '{$funcionario_id}', '{$modelo_id}')";

			$res = $conn->query($sql);

			if ($res == true) {  //se $res igual a VERDADEIRO
				print"<script>alert('Cadrastrou com sucesso!');</script>";
				print"<script>location.href='?page=listar-venda';</script>";
			}else{
				print"<script>alert('Não Cadrastrou!');</script>";
				print"<script>location.href='?page=listar-venda';</script>";
			}

			break;
		
		case 'editar':
			$data_venda = $_POST['data_venda'];
            $valor_venda = $_POST['valor_venda'];
            $cliente_id_cliente = $_POST['cliente_id_cliente'];
            $funcionario_id_funcionario = $_POST['funcionario_id_funcionario'];
            $modelo_id_modelo = $_POST['modelo_id_modelo'];

            $sql = "UPDATE venda SET 
						data_venda = '{$data_venda}',
                        valor_venda='{$valor_venda}', 
                        cliente_id_cliente='{$cliente_id_cliente}', 
                        funcionario_id_funcionario='{$funcionario_id_funcionario}',
                        modelo_id_modelo='{$modelo_id_modelo}' 
                    WHERE id_venda=".$_REQUEST["id_venda"];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Editou com sucesso!');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }else{
                print "<script>alert('Não editou');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }
        break;

	    case 'excluir':
		    $sql = "DELETE FROM venda WHERE id_venda=".$_REQUEST['id_venda'];

		    $res = $conn->query($sql);

		    if($res == true){
		        print "<script>alert('Excluiu com sucesso!');</script>";
		        print "<script>location.href='?page=listar-venda';</script>";
		    }else{
		        print "<script>alert('Não excluiu');</script>";
		        print "<script>location.href='?page=listar-venda';</script>";
		    }
	    break;
		default:
			// code...
			break;
	}