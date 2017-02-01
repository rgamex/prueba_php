<?php
class compras
{
	
	private $cod_compra;
	private $cod_prod;
	private $cod_cli;
	
	
	function compras($cod_compra,$cod_prod,$cod_cli)
	{
		
		$this->cod_cli=$cod_cli;
		$this->cod_compra=$cod_compra;
		$this->cod_prod=$cod_prod;
		
	}
	
	
	//Creo los getter de las propiedades
	function getCod_cli()
	{
		return $this->cod_cli;
	}
	
	
	function getCod_compra()
	{
		return $this->cod_compra;
	}
	
	
	
	function getCod_prod()
	{
		return $this->cod_prod;
	}
	
	
	//creo los setter
	
	
	function setCod_cli($cod_cli)
	{
		$this->cod_productos=$cod_prod;
	}
	
	
	function setcod_prod($cod_prod)
	{
		$this->cod_prod=$cod_prod;
	}
	
	
	function setcod_compra($cod_compra)
	{
		$this->cod_compra=$cod_compra;
	}
	
}