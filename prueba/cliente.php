<?php
class cliente
{
	private $Nombre;
	private $Apellido1;
	private $Apellido2;
	private $Tipo_via;
	private $Nombre_via;
	Private $CP;
	private $Num_casa;
	Private $Provincia;
	private $Poblacion;
	Private $Telefono;
	private $email;
	private $Contraseña;
	private $DNI;
	private $Empresa;
	private $Pais;
	private $info_adicinal;
	private $F_nacimiento;
	
	
	function cliente($nom,$ape1,$ape2,$tipo_via,$nom_via,$cp,$num_casa,$prov,$poblacion,$telf,$email,$contraseña,$DNI,$empresa,$pais,$info_adicional,$f_naci)
	{
		$this->Nombre=$nom;
		$this->Apellido1=$ape1;
		$this->Apellido2=$ape2;
		$this->Tipo_via=$tipo_via;
		$this->Nombre_via=$nom_via;
		$this->CP=$cp;
		$this->Num_casa=$num_casa;
		$this->Provincia=$prov;
		$this->Poblacion=$poblacion;
		$this->Telefono=$telf;
		$this->email=$email;
		$this->Contraseña=$contraseña;
		$this->DNI=$DNI;
		$this->Empresa=$empresa;
		$this->Pais=$pais;
		$this->info_adicinal=$info_adicional;
		$this->F_nacimiento=f_naci;
	
		
	}
	
	//Creo los getter de las propiedades
	function getNombre()
	{
		return $this->Nombre;
	}
	
	function getApe1()
	{
		return $this->Apellido1;
	}
	
	function getApe2()
	{
		return $this->Apellido2;
	}
	
	function getTipo_via()
	{
		return $this->Tipo_via;
	}
	
	function getNombre_via()
	{
		return $this->Nombre_via;
	}
	
	function getCP()
	{
		return $this->CP;
	}
	
	function getNumero_casa()
	{
		return $this->Num_casa;
	}
	
	function getProv()
	{
		return $this->Provincia;
	}
	
	function getPoblacion()
	{
		return $this->Poblacion;
	}
	
	function getTelef()
	{
		return $this->Telefono;
	}
	
	
	function getEmail()
	{
		return $this->DNI;
	}
	
	
	function getContraseña()
	{
		return $this->Contraseña;
	}
	
	
	function getDNI()
	{
		return $this->DNI;
	}
	
	
	
	function getEmpresa()
	{
		return $this->Empresa;
	}
	
	
	
	function getPais()
	{
		return $this->Pais;
	}
	
	
	function getInfo()
	{
		return $this->info_adicinal;
	}
	
	function getF_naci()
	{
		return $this->F_nacimiento;
	}
	
	
	
	//Creo los setter
	
	
	function setNombre($nombre)
	{
		$this->Nombre=$nombre;
	}
	
	function setApe1($ape1)
	{
		$this->Apellido1=$ape1;
	}
	
	function setApe2($ape2)
	{
		$this->Apellido2=$ape2;
	}
	
	function setTipo_via($tipo_via)
	{
		$this->Tipo_via=$tipo_via;
	}
	
	function setNombre_via($nombre_via)
	{
		$this->Nombre_via=$nombre_via;
	}
	
	function setCP($cp)
	{
		$this->CP=$cp;
	}
	
	function setNumero_casa($num_casa)
	{
		$this->Num_casa=$num_casa;
	}
	
	function setProv($prov)
	{
		$this->Provincia=$prov;
	}
	
	function setPoblacion($poblacion)
	{
		$this->Provincia=$poblacion;
	}
	
	function setTelef($tlf)
	{
		$this->Telefono=$tlf;
	}
	
	
	function setEmail($email)
	{
		$this->email=$email;
	}
	
	
	function setContraseña($contraseña)
	{
		$this->Contraseña=$contraseña;
	}
	
	
	function setDNI($DNI)
	{
		$this->DNI=$DNI;
	}
	
	
	
	function setEmpresa($empresa)
	{
		$this->Empresa=$empresa;
	}
	
	
	
	function setPais($pais)
	{
		$this->Pais=$pais;
	}
	
	
	function setInfo($info)
	{
		$this->info_adicinal=$info;
	}
	
	
	function setF_naci($f_naci)
	{
		$this->F_nacimiento=$f_naci;
	}
	
	
}

