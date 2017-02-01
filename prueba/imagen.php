<?php
class imagen
{
	
	private $id_img;
	private $tipo;
	private $id_producto;
	private $img;
	
	
	function categorias($id_img,$nombre,$id_producto,$img)
	{
			$this->id_img=$id_img;
			$this->id_producto=$id_producto;
			$this->tipo=$tipo;
			$this->img=$img;
	}
	
	
	
	
	//Creo los getter
	function getId_img()
	{
		return $this->id_img;
	}
	
	function getImg()
	{
		return $this->img;
	}
	
	function getId_prod()
	{
		return $this->id_producto;
	}
	
	function getTipo()
	{
		return $this->tipo;
	}
	
	
	//creo los setter
	
	function setImg($img)
	{
		$this->img=$img;
	}
	
	
	function setId_img($id_img)
	{
		$this->id_img=$id_img;
	}
	
	
	function setId_prod($cod_prod)
	{
		$this->id_producto=$cod_prod;
	}
	
	
	
	function settipo($tipo)
	{
		$this->tipo=$tipo;
	}
	
}