<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome = $_POST['nome_funcionario'];
			$email = $_POST['email_funcionario'];
			$telefone = $_POST['telefone_funcionario'];

			$sql = "INSERT INTO funcionario (nome_funcionario, email_funcionario, telefone_funcionario)
			VALUES ('{$nome}', '{$email}', '{$telefone}')";

			$res = $conn->query($sql);

			if ($res == true) {  //se $res igual a VERDADEIRO
				print"<script>alert('Cadrastrou com sucesso!');</script>";
				print"<script>location.href='?page=listar-funcionario';</script>";
			}else{
				print"<script>alert('Não Cadrastrou!');</script>";
				print"<script>location.href='?page=listar-funcionario';</script>";
			}

			break;
		
		default:
			// code...
			break;
	}