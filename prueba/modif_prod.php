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


if(!isset($_SESSION))
{
	session_start();
}


if(!isset($_SESSION["productos"]))
{
	$_SESSION["productos"]=array();
}


if(!isset($_SESSION["categorias"]))
{
	$_SESSION["categorias"]=array();
}


$manejador=new manejador();
$usuario="root";
$contraseña="";
$dsn="mysql:host=localhost;dbname=mueblesbbb";

$conexion_mysql=$manejador->conectar_BD($usuario, $contraseña, $dsn);


$query="SELECT COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA  LIKE 'mueblesbbb' AND TABLE_NAME = 'Productos'";

$datos=$manejador->seleccionar($conexion_mysql,$query);



html::abrir_form("", "post");
html::input("submit", "borrar", "borrar","Borrar");
html::input("submit", "Modificar", "Modificar","Modificar");
html::cerrar_form();

html::creaTabla_y_ths($datos);

//insertar formulario para insertar datos


$query="SELECT COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA  LIKE 'mueblesbbb' AND TABLE_NAME = 'Productos'";

$datos=$manejador->seleccionar($conexion_mysql,$query);

html::insertar_datos($datos,"");



//datos de cada cliente
$query="SELECT * from Productos";
$datos=$manejador->seleccionar($conexion_mysql,$query);


html::mostrarDatos($datos);
html::cerrar_tabla();





//Sincronizar array con base de datos
if($datos->rowCount()!=sizeof($_SESSION["productos"]))
{
	$query="SELECT * from Productos";
	$datos=$manejador->seleccionar($conexion_mysql,$query);
	
	$i=0;
	
	
	
	
	if(sizeof($_SESSION["productos"])==0)
	{
		while ($fila=$datos->fetch(PDO::FETCH_OBJ))
		{
			
			
			$producto=new producto($fila->cod_productos, $fila->Nombre, $fila->descripcion, $fila->oferta, $fila->novedad, $fila->cantidad, $fila->stock,$fila->Fabricante, $fila->Precio, $fila->annos_garantia, $fila->Caracteristicas, $fila->especificaciones, $fila->f_crecion, $fila->cod_cat);
			array_push($_SESSION["productos"],$producto);
			$_SESSION["productos"][$i];
		}
	}
	else 
	{
	
		while ($fila=$datos->fetch(PDO::FETCH_OBJ))
		{
			$producto=new producto($fila->cod_productos, $fila->Nombre, $fila->descripcion, $fila->oferta, $fila->novedad, $fila->cantidad, $fila->stock,$fila->Fabricante, $fila->Precio, $fila->annos_garantia, $fila->Caracteristicas, $fila->especificaciones, $fila->f_crecion, $fila->cod_cat);
			
			if($i<sizeof($_SESSION["productos"]))
			{
			
				$array_productos=$_SESSION["productos"];
				

				
				
				if($producto->getcod()!=$array_productos[$i]->getcod())
				{
				
					
					
					array_push($_SESSION["productos"],$producto);
					
					
					
				}
			
				
				
				
			}
			
			else {
				
				array_push($_SESSION["productos"],$producto);
				

			}
		
			$i++;
		}
		

	}
}


var_dump($_POST);

	//Insertar datos en la base de datos
	
if(isset($_POST["insert"]))
{
	$i=0;
	foreach($_POST as $variable => $valor)
	{
		$nombre_colum[$i]=$variable;
		$valores_colum[$i]=$valor;
		$i++;
	}
	
			$sentencia="insert into Productos ($nombre_colum[0],$nombre_colum[1],$nombre_colum[2],$nombre_colum[3],$nombre_colum[4],$nombre_colum[5],$nombre_colum[6],$nombre_colum[7],$nombre_colum[8],$nombre_colum[9],$nombre_colum[10],$nombre_colum[11],$nombre_colum[12],$nombre_colum[13],$nombre_colum[14],$nombre_colum[15]) values ($valores_colum[0],$valores_colum[1],$valores_colum[2],$valores_colum[3],$valores_colum[4],$valores_colum[5],$valores_colum[6],$valores_colum[7],$valores_colum[8],$valores_colum[9],$valores_colum[10],$valores_colum[11],$valores_colum[12],$valores_colum[13],$valores_colum[14],$valores_colum[15])";
	
			$manejador->insertar($conexion_mysql,$sentencia);
			
}





if(isset($_POST["borrar"]))
{
	
	html::abrir_form("", "post");
	
	html::Label("Introduzca un codigo de producto:");
	
	$cod_prod=array();
	
	for($i=0;$i<sizeof($_SESSION["productos"]);$i++)
	{
		
		array_push($cod_prod, $_SESSION["productos"][$i]->getcod());
	}
	
	
	
	html::input("text", "cod_prod","","" );
	html::input("submit", "Eliminar", "Eliminar", "eliminar");
	html::cerrar_form();
}




if(isset($_POST["Eliminar"]))
{
	
	
	$manejador->borrarDatos($conexion_mysql, "Productos", "cod_productos=".$_POST['cod_prod']);
	
	
	for($i=0;$i<sizeof($_SESSION["productos"]);$i++)
	{
		
		if($_SESSION["productos"][$i]->getcod()==$_POST['cod_prod'])
		{
			
			unset ($_SESSION["productos"][$i]);
			
		}
		
	}
	
}



If(isset($_POST["Modificar"]))
{
	
	
	html::abrir_form("", "post");
	
	html::Label("Introduzca un codigo de producto para modificar:");
	
	$cod_prod=array();
	
	for($i=0;$i<sizeof($_SESSION["productos"]);$i++)
	{
	
		array_push($cod_prod, $_SESSION["productos"][$i]->getcod());
	}
	
	
	
	html::input("text", "cod_prod","","" );
	html::input("submit", "Modificar2", "Modificar2", "Modificar");
	html::cerrar_form();
	
}


If(isset($_POST["Modificar2"]))
{
	$query="SELECT COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA  LIKE 'mueblesbbb' AND TABLE_NAME = 'Productos'";
	
	$datos=$manejador->seleccionar($conexion_mysql,$query);
	
	html::creaTabla_y_ths($datos);
	
	html::abrir_form("", "post");

	$query="SELECT COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA  LIKE 'mueblesbbb' AND TABLE_NAME = 'Productos'";
	
	$datos=$manejador->seleccionar($conexion_mysql,$query);
	
	$query2="SELECT * from Productos";
	$datos2=$manejador->seleccionar($conexion_mysql,$query);
	
	html::insertar_datos($datos,$datos2);
	
	html::cerrar_form();
	
	html::cerrar_tabla();
	
	
	
	
}



	



?>




</body>
</html>
