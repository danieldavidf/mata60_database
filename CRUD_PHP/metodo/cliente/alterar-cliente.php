<?php
	include("conectar-cliente.php");
	$clientes = selectIdCliente($_POST["usuario_id"]);
	//var_dump($pessoa);
?>
<meta charset="utf-8">
<form name="dadosPessoa" action="conectar-cliente.php" method="POST">
	<table>
		<tbody>
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nome_completo" value="<?=$clientes["nome_completo"]?>" size="20" required /></td>
			</tr>
			<tr>
				<td>Usuário:</td>
				<td><input type="text" name="username" value="<?=$clientes["username"]?>" size="20" required /></td>
			</tr>
			<tr>
				<td>Senha:</td>
				<td><input type="text" name="senha" value="<?=$clientes["senha"]?>" size="20" required /></td>
			</tr>
			<tr>
				<td>País:</td>
				<td><input type="text" name="pais" value="<?=$clientes["pais"]?>" size="20" required /></td>
			</tr>
			<tr>
				<td>Nascimento:</td>
				<td><input type="date" name="data_nasc" value="<?=$clientes["data_nasc"]?>" required /></td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="usuario_id" value="<?=$clientes["usuario_id"]?>" />
					<input type="submit" name="acao" value="Atualizar" />
				</td>
			</tr>
		</tbody>
	</table>	
</form>
<form action="../../pages/clientes.php">
	<input type="submit" value="Cancelar">
</form>