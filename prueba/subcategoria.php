<?php
class subcategorias
{
	
	private $id_cat;
	private $nombre;
	private $id_subcat;
	
	
	function subcategorias($id_categoria,$nombre,$id_subcat)
	{
			$this->id_cat=$id_categoria;
			$this->id_subcat=$id_subcat;
			$this->nombre=$nombre;
	}
	
	
	
	
	//Creo los getter
	function getId_cat()
	{
		return $this->id_cat;
	}
	
	function getId_subcat()
	{
		return $this->id_subcat;
	}
	
	function getNombre()
	{
		return $this->nombre;
	}
	
	
	//creo los setter
	
	
	function setId_cat($id_cat)
	{
		$this->id_cat=$id_cat;
	}
	
	
	function setId_prod($id_subcat)
	{
		$this->id_subcat=$id_subcat;
	}
	
	
	
	function setNombre($nombre)
	{
		$this->nombre=$nombre;
	}
	
}