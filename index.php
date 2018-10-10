<?php
	include 'configuracion.php';

?>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" type="text/css">
	<script type="text/javascript">
		function Entero(f,numero)
		{
		if(isNaN(f[numero].value))
			{
			alert("No es un número entero");
			f[numero].value="";
			f[numero].focus();
			return false;
			}   
		}
	</script>
</head>


<body>
	<div class="row">
		<div class="col-sm-1" style="border:solid red 1px"></div>
		<div class="col-sm-10" style="border:solid red 1px; text-align: center">
		<form name="formulario" action="app/guarda_gasto.php" method="POST" onsubmit="return Entero(this, 'valor_concepto')">
			<div>
					<div class="textoGrande">Importe</div>
				<input class="textoGrande" type="text" id="valor" name="valor_concepto" required placeholder="Valor de la compra">
			</div>
			<div>
				<div class="textoGrande">Fecha</div>
				<input class="textoGrande" type="date" id="fecha" name="fecha">
			</div>

			<div class="row" style="border: solid green 1px; text-align: center">
				<table style="border: solid red 1px; margin: 0 auto" class="textoGrande">
					<tr>
						<?php
						$conn = mysqli_connect($host, $user_db, $pass_db, $name_db);
						if (!$conn) {
							die("Connection failed: " . mysqli_connect_error());
						}
						else{
							$consulta=mysql_query("SELECT 'nombre' FROM 'conceptos'") or die("Error en la consulta de conceptos E220");
							
							foreach()
							echo'<tr><div class="radio"><label><input id';
						}

						

						?>


						<td>
							<div class="radio">
								<label><input id="despensa" name="concepto" type="radio" value="despensa" checked> Despensa</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="radio">
								<label><input id="remis" name="concepto"  type="radio" value="remis"> Remis</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="radio">
								<label><input id="hiper" name="concepto" type="radio" value="hiper"> Hiper</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="radio">
								<label><input id="farmacia" name="concepto" type="radio" value="farmacia"> Farmacia</label>
							</div>
						</td>
					</tr>
				</table>
			</div>


			<input class="textoGrande" type="submit" name="guardar" value="Guardar">
		</form>
		</div>
		<div class="col-sm-1" style="border:solid red 1px"></div>
	</div>

</body>
</html>