<h1>Cadastrar Vendas</h1>
<form action="?page=salvar-venda" method="POST">
	<input type="hidden" name="acao" value="cadastrar"><!---->

	<div class="mb-3">
		<label> Nome
			<input type="text" name="nome_venda" class="form-control"><!--name é variavel / "precisa pegar do outro lado"-->
		</label>
	</div>
	
	<div class="mb-3">
		<label> E-mail
			<input type="text" name="email_venda" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<label> Telefone
			<input type="text" name="telefone_venda" class="form-control">
		</label>
	</div>

	<div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>