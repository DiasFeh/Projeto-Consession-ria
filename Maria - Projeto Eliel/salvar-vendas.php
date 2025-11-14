<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome = $_POST['nome_vendas'];
			$email = $_POST['email_vendas'];
			$telefone = $_POST['telefone_vendas'];

			$sql = "INSERT INTO vendas (nome_vendas, email_vendas, telefone_vendas)
			VALUES ('{$nome}', '{$email}', '{$telefone}')";

			$res = $conn->query($sql);

			if ($res == true) {  //se $res igual a VERDADEIRO
				print"<script>alert('Cadrastrou com sucesso!');</script>";
				print"<script>location.href='?page=listar-vendas';</script>";
			}else{
				print"<script>alert('Não Cadrastrou!');</script>";
				print"<script>location.href='?page=listar-vendas';</script>";
			}

			break;
		
		case 'editar':
            $nome = $_POST["nome_vendas"];
            $email = $_POST["email_vendas"];
            $telefone = $_POST["telefone_vendas"];

            $sql = "UPDATE vendas SET 
                        nome_vendas='{$nome}', 
                        email_vendas='{$email}', 
                        telefone_vendas='{$telefone}' 
                    WHERE id_vendas=".$_REQUEST["id_vendas"];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Editou com sucesso!');</script>";
                print "<script>location.href='?page=listar-vendas';</script>";
            }else{
                print "<script>alert('Não editou');</script>";
                print "<script>location.href='?page=listar-vendas';</script>";
            }
        break;

	    case 'excluir':
		    $sql = "DELETE FROM vendas WHERE id_vendas=".$_REQUEST['id_vendas'];

		    $res = $conn->query($sql);

		    if($res == true){
		        print "<script>alert('Excluiu com sucesso!');</script>";
		        print "<script>location.href='?page=listar-vendas';</script>";
		    }else{
		        print "<script>alert('Não excluiu');</script>";
		        print "<script>location.href='?page=listar-vendas';</script>";
		    }
	    break;
		default:
			// code...
			break;
	}