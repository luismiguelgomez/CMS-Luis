<?php
include ("../includes/header.php");
?>
	<div class="container p-4">
    	<div class = "row">
        	<div class= "col-md-4">

	<form action="crearArchivo.php" method="POST">
		<center>
			<strong>Nombre del archivo: 
				<input type="text" name="nombreArchivo" style="width:90%"> <br><br>
			Texto del archivo: &NonBreakingSpace; </strong>
		
		<textarea name="textoArchivo" rows="10" cols="30"></textarea><br>
		</center>
		<center>
			<br>
			<input class="btn btn-success btn-block" type="submit" 
				name="boton" value="Crear archivo" style = "width:95%">
		</center>
	</form>
			</div>
		</div>
	</div>

	

<?php
include ("../includes/footer.php");
?>