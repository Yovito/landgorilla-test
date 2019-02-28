<?php/*
Crear un pequeño formulario HTML que permita ingresar una fecha (con formato MM/dd/YYYY)
en un textfield y adjuntar 2 imagenes.
Estos 3 campos serán subidos al servidor y se registraran en una tabla de MySQL.
Se tomará en cuenta la forma en que se suban y guarden los archivos, así como también la calidad de código,
validaciones respecto a la fecha y el tipo de archivo; y la seguridad para la transmisión de datos.
Se puede resolver el ejercicio con o sin framework.
Al final de la prueba, deberás adjuntar todo lo desarrollado +
el script SQL de la tabla creada en un zip o en un repositorio en Github.
La duración del examen es de 2 horas.
*/?>
<html lang="es">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<script src="lib/jquery.js" type="text/javascript"></script>
  	<meta charset="UTF-8">
  	<title> .:: Prueba - Land Gorilla ::. </title>
  </head>

<?php
 require ("app/class.upload.php");


    if( isset($_REQUEST["btnGuardar"]) && $_REQUEST["btnGuardar"] == "Guardar" ){
      $upload = new uploadFile();
      $upload->build($_REQUEST["txtFecha"],
      $_FILES['getFile1']['tmp_name'],
      $_FILES['getFile2']['tmp_name'] );

    }
?>

<script type="text/javascript" language="javascript">
  $(document).on("ready", function(){
    $("#idFecha").focusout(function(){
        s= $(this).val();
        var bits = s.split('/');
        var d = new Date(bits[2] + '/' + bits[0] + '/' + bits[1]); // MM/dd/YYYY  /
        alert(d);
      });
});
document.frEnviar.hdnLisNum.value=listaNum;
document.frEnviar.submit();

</script>

<body>
	<div id="contendor" class="container text-center" >
		<h1>Prueba - Land Gorilla</h1>
		<form action="" method="post">
      <label for="idFecha" >Ingresar Fecha: </label>
			<input type="text" id="idFecha" name="txtFecha"  /> <br /> <br />
      <input type="file" id="idFile1" name="getFile1" accept="image/png, image/jpeg"> <br /> <br />
      <input type="file" id="idFile2" name="getFile2" accept="image/png, image/jpeg"> <br /> <br />

      <input type="submit" class="btn btn-primary " name="btnGuardar" id="idcs"  value="Guardar" />
		</form>
	</div>


</body>
</html>
