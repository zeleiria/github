<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Escola</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="resultadoForm">
		<table>
			<thead>
				<tr>
					<td>Id</td>
					<td>Nome</td>
					<td>Nota</td>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
	<form action="controller/controllerEscola" name="formEscola" method="POST" id="formEscola">
		<br><br>
		<input type="text" name="busca" id="busca"><br><br>
		<input type="submit" value="Pesquisar">
	</form>
	
	<script src="lib/zepto.js"></script>
	<script src="lib/javascript.js"></script>
</body>
</html>