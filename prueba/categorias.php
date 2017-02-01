<?php
class categorias
{
	
	private $id_categoria;
	private $nombre;
	private $id_producto;
	
	
	function categorias($id_categoria,$nombre,$id_producto)
	{
			$this->id_categoria=$id_categoria;
			$this->id_producto=$id_producto;
			$this->nombre=$nombre;
	}
	
	
	
	
	//Creo los getter
	function getId_cat()
	{
		return $this->id_categoria;
	}
	
	function getId_prod()
	{
		return $this->id_producto;
	}
	
	function getNombre()
	{
		return $this->nombre;
	}
	
	
	//creo los setter
	
	
	function setId_cat($id_cat)
	{
		$this->id_categoria=$id_cat;
	}
	
	
	function setId_prod($cod_prod)
	{
		$this->id_producto=$cod_prod;
	}
	
	
	
	function setNombre($nombre)
	{
		$this->nombre=$nombre;
	}
	
}