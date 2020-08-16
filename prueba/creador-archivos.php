<?php
include ("../includes/header.php");
include ("editorTexto.html");
?>
	<div class="container p-4">
    	<div class = "row">
        	<div class= "col-md-12">

		<form action="crearArchivo.php" method="POST">
			<center>
				<strong>Nombre del archivo: 
					<input type="text" name="nombreArchivo" style="width:90%"> <br><br>
				</strong>
			
				<div class = "container p-4">

				<h1>Editor de texto para noticias</h1>
				
					<textarea id="mytextarea" name="mytextarea">
					Hello, World!
					</textarea>
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