<?php
require 'vendor/autoload.php';
class claseAlertas {

	public $dbhost ="localHost";


	public function conexion(){
		$client = new MongoDB\Client;
		//DB
		$db = $client->noticias;
		$coleccion = $db->alertas;

		return $coleccion;
		
	}

   public function obtenerAlertas($distrito) {
   		$coleccion = $this->conexion();
   		//echo "Hola";
    	//Query para ver alertas de distritos -> habria que añadir la condicion de fecha
    	$documento = $coleccion->find(['distrito' => $distrito]);
    	foreach ($documento as $doc) {
    		# code...
    		$distrito = $doc->distrito;
    		$texto = $doc->alerta;
    		$fecha = $doc->fecha;
    		$categoria = $doc->categoria;
    		$autor = $doc->fuente;
    		$url = $doc->url;
    		$this->mostrarAlertas($distrito, $fecha, $texto, $categoria, $autor, $url);
    		
    	}
    	
    }

    //Funcion que muestra una alerta con el formato correspondiente
    public function mostrarAlertas($distrito, $fecha, $texto, $categoria, $autor, $url){
    	echo '
    	<div class="card-block">
            <div class="profiletimeline">
                <div class="sl-item">
                    <div class="sl-left">'.$categoria.'</div>
                    <div class="sl-right">';
                        echo '<div><span class=sl-date">' .$fecha. '</span>';
                        	echo "<p></p>";
                        	if ($url != Null){
                            	echo "<p><a href=".$url.">".$texto."</a></p>";
                            }else{
                            	echo "<p>$texto</p>";
                            }
                           
                            echo '<div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a><class="link m-r-10"><i class="fa fa-heart text-danger"></i>' .$autor.'</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
           echo ' </div>';
       echo ' </div>';
       echo '<hr>';
    }

    public function mostrarDistritos(){
    	echo '<html>
    		<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-block">
                                    <div class="form-group">
                                            <label class="col-sm-12">Selecciona un distrito</label>
                                            <div class="col-sm-12">      
								    				<select class="form-control form-control-line">
								                        <option>Arganzuela</option>
								                        <option>Barajas</option>
								                        <option>Carabanchel</option>
								                        <option>Centro</option>
								                        <option>Chamartín</option>
								                        <option>Chamberí­</option>
								                        <option>Ciudad Lineal</option>
								                        <option>Fuencarral-El Pardo</option>
								                        <option>Hortaleza</option>
								                        <option>Latina</option>
								                        <option>Moncloa-Aravaca</option>
								                        <option>Moratalaz</option>
								                        <option>Puente de Vallecas</option>
								                        <option>Retiro</option>
								                        <option>Salamanca</option>
								                        <option>San Blas - Canillejas</option>
								                        <option>Tetuán</option>
								                        <option>Usera</option>
								                        <option>Vicálvaro</option>
								                        <option>Villa de Vallecas</option>
								                        <option>Villaverde</option>
								                    </select>
								              </div>                                      
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
			 </html>';
    }

}
?>