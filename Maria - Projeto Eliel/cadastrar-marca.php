<h1>Cadastrar Marca</h1>
<form action="?page=salvar-marca" method="POST">
	<input type="hidden" name="acao" value="cadastrar"><!---->

	<div class="mb-3">
		<label> Nome
			<input type="text" name="nome_marca" class="form-control"><!--name é variavel / "precisa pegar do outro lado"-->
		</label>
	</div>
	
	<div class="mb-3">
		<label> E-mail
			<input type="text" name="email_marca" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<label> Telefone
			<input type="text" name="telefone_marca" class="form-control">
		</label>
	</div>

	<div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>