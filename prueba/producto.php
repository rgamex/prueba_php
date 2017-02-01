<?php
class producto
{
	
	private $cod_productos;
	private $Nombre;
	private $descripcion;
	private $oferta;
	private $novedad;
	private $cantidad;
	private $stock;
	private $Fabricante;
	private $Precio;
	private $annos_garantia;
	private $Caracteristicas;
	private $especificaciones;
	private $precio_descuento;
	private $porcentaje_descuento;
	private $f_creacion;
	private $cod_cat;
	
	
	
	function producto($cod_productos,$Nombre,$descripcion,$oferta,$novedad,$cantidad,$stock,$Fabricante,$Precio, $annos_garantia,$Caracteristicas,$especificaciones,$f_creacion,$cod_cat)
	{
		
		$this->cod_productos=$cod_productos;
		$this->Nombre=$Nombre;
		$this->descripcion=$descripcion;
		$this->oferta=$oferta;
		$this->novedad=$novedad;
		$this->cantidad=$cantidad;
		$this->stock=$stock;
		$this->Fabricante=$Fabricante;
		$this->Precio=$Precio;
		$this->annos_garantia=$annos_garantia;
		$this->Caracteristicas=$Caracteristicas;
		$this->especificaciones=$especificaciones;
		$this->f_creacion=$f_creacion;
		$this->cod_cat=$cod_cat;
	
	}
	
	//Creo los getter
	function getcod()
	{
		return $this->cod_productos;
	}
	
	function getNombre()
	{
		return $this->Nombre;
	}
	
	function getDescripcion()
	{
		return $this->descripcion;
	}
	
	
	function getOferta()
	{
		return $this->oferta;
	}
	
	function getNovedad()
	{
		return $this->novedad;
	}
	
	function getCantidad()
	{
		return $this->cantidad;
	}
	
	
	function getStock()
	{
		return $this->stock;
	}
	
	function getFabricante()
	{
		return $this->Fabricante;
	}
	
	function getPrecio()
	{
		return $this->Precio;
	}
	
	function getGarantia()
	{
		return $this->annos_garantia;
	}
	
	
	function getCaracteristicas()
	{
		return $this->Caracteristicas;
	}
	
	function getEspecificaciones()
	{
		return $this->especificaciones;
	}
	
	function getCreacion()
	{
		return $this->f_creacion;
	}
	
	function getCod_cat()
	{
		return $this->cod_cat;
	}
	
	function getPrecio_desc()
	{
		return $this->precio_descuento;
	}
	
	
	function getPorcentaje_desc()
	{
		return $this->porcentaje_descuento;
	}
	
	
		//creo los setter
		
		
		function setcod($cod_prod)
		{
			$this->cod_productos=$cod_prod;
		}
	
	function setNombre($nom)
	{
		return $this->Nombre=$nom;
	}
	
	function setDescripcion($descripcion)
	{
		return $this->descripcion=$descripcion;
	}
	
	
	function setOferta($oferta)
	{
		return $this->oferta=$oferta;
	}
	
	function setNovedad($novedad)
	{
		return $this->novedad=$novedad;
	}
	
	function setCantidad($cantidad)
	{
		return $this->cantidad=$cantidad;
	}
	
	
	function setStock($stock)
	{
		return $this->stock=$stock;
	}
	
	function setFabricante($fabricante)
	{
		return $this->Fabricante=$fabricante;
	}
	
	function setPrecio($precio)
	{
		return $this->Precio=$precio;
	}
	
	function setGarantia($garantia)
	{
		return $this->annos_garantia=$garantia;
	}
	
	
	function setCaracteristicas($caracteristicas)
	{
		return $this->Caracteristicas=$caracteristicas;
	}
	
	function setEspecificaciones($especificaciones)
	{
		return $this->especificaciones=$especificaciones;
	}
	
	function setCreacion($creacion)
	{
		return $this->f_creacion=$creacion;
	}
	
	function setCod_cat($cod_cat)
	{
		return $this->cod_cat=$cod_cat;
	}
	
	function setPrecio_desc($precio_desc)
	{
		return $this->precio_descuento=$precio_desc;
	}
	
	
	function setPorcentaje_desc($porcentaje_desc)
	{
		return $this->porcentaje_descuento=$porcentaje_desc;
	}
	
}