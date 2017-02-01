<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>

<?php

require_once 'html/claseHTML.php';
require_once 'clases/categorias.php';
require_once 'clases/cliente.php';
require_once 'clases/compras.php';
require_once 'clases/imagen.php';
require_once 'clases/manejador_BD.php';
require_once 'clases/producto.php';
require_once 'clases/subcategoria.php';
require_once 'clases/tiene_subcat.php';


$clientes=[];
$productos=[];

session_start();

$manejador=new manejador();
$usuario="root";
$contraseña="";
$dsn="mysql:host=localhost;dbname=mueblesbbb";

$conexion_mysql=$manejador->conectar_BD($usuario, $contraseña, $dsn);


$query="SELECT COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA  LIKE 'mueblesbbb' AND TABLE_NAME = 'clientes'";

$datos=$manejador->seleccionar($conexion_mysql,$query);



html::creaTabla_y_ths($datos);

//insertar formulario para insertar datos


$query="SELECT COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA  LIKE 'mueblesbbb' AND TABLE_NAME = 'clientes'";

$datos=$manejador->seleccionar($conexion_mysql,$query);



html::insertar_datos($datos);



//datos de cada cliente
$query="SELECT * from clientes";
$datos=$manejador->seleccionar($conexion_mysql,$query);


html::mostrarDatos($datos);
html::cerrar_tabla();


if(!empty($_POST)&&$_POST["insert"]=="Insertar	")
{


	$valores=[];
	while ($titulo=$datos->fetchColumn())
	{
		array_push($valores, $datos);
	}

	$cliente=new cliente($valores=[0], $valores=[1], $valores=[2], $valores=[3], $valores=[4], $valores=[5], $valores=[6], $valores=[7], $valores=[8],$valores=[9], $valores=[10], $valores=[11], $valores=[12], $valores=[13], $valores=[14], $valores=[15], $valores=[16]);
	array_push($clientes, $cliente);

	var_dump($clientes);

	foreach($_POST as $variable => $valor)
	{
		if($variable!="insert")
		{
			$manejador->insertar($conexion_mysql,"clientes", $variable, $valor);
		}
	}
	 
	var_dump($clientes);

}


if(!empty($_POST)&&$_POST["eliminar"]="Eliminar")
{






}



?>




</body>
</html>




<?php
