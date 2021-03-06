<?php
require 'vendor/autoload.php';

class Conexion {
	public $dbhost ="localHost";
	private $conexion;
	private $conAlertas;
//	private $conEstadisticas;

	function __construct() {
    	$this->conexion = $this->crearConexion();
  	}

	private function crearConexion(){
		$client = new MongoDB\Client;		
		$db = $client->noticias;
		return $db;		
	}

	public function conexionAlertas(){
		$con = $this->crearConexion();
		$conAlertas = $con->alertas;
		return $conAlertas;
	}

	public function conexionEstadisticas(){
		$con = $this->crearConexion();
		$conEstadisticas = $con->estadisticas;
		return $conEstadisticas;
	}

    public function conexionEstSeg(){
   		$con = $this->crearConexion();
    	$conEstSeguridad = $con->estSeguridad;
    	return $conEstSeguridad;
    }

    public function conexionEstDetenidos(){
    	$con = $this->crearConexion();
    	$conEstDetenidos = $con->estDetenidos;
    	return $conEstDetenidos;
    }

    public function conexionEstAccidentes(){
    	$con = $this->crearConexion();
    	$conEstAccidentes = $con->estAccidentes;
    	return $conEstAccidentes;
    }


}
?>