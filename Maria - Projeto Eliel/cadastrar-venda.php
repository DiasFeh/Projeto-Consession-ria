<h1>Cadastrar venda</h1>
<form action="?page=salvar-venda" method="POST">
	<input type="hidden" name="acao" value="cadastrar"><!---->

	<div class="mb-3">
		<label> Data
			<input type="date" name="data_venda" class="form-control"><!--name é variavel / "precisa pegar do outro lado"-->
		</label>
	</div>
	
	<div class="mb-3">
		<label> Valor da Venda
			<input type="number" name="valor_venda" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<label> ID Cliente
			<input type="number" name="cliente_id_cliente" class="form-control">
		</label>
	</div>

    <div class="mb-3">
		<label> ID Funcionário
			<input type="number" name="funcionario_id_funcionario" class="form-control">
		</label>
	</div>

    <div class="mb-3">
		<label> ID Modelo
			<input type="text" name="modelo_id_modelo" class="form-control">
		</label>
	</div>

	<div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>