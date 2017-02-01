<?php
class  tiene_subcategorias
{
	
	private $id_categoria;
	private $id_subcat;
	
	
	function categorias($id_categoria,$id_subcat)
	{
			$this->id_categoria=$id_categoria;
			$this->id_subcat=$id_subcat;
			
	}
	
	
	
	
	//Creo los getter
	function getId_cat()
	{
		return $this->id_categoria;
	}
	
	function getId_subcat()
	{
		return $this->id_subcat;
	}
	
	
	
	
	//creo los setter
	
	
	function setId_cat($id_cat)
	{
		$this->id_categoria=$id_cat;
	}
	
	
	function setId_subcat($cod_subcat)
	{
		$this->id_subcat=$cod_subcat;
	}
	
	
	
	
	
}