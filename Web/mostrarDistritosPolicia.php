<?php 

    /*NO SE ESTA USANDO*/

    include ("claseAlertas.php");
    $alertas = new claseAlertas();

    echo '<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">                    
                        <div class="form-group">
                            <label class="col-sm-12">Selecciona un distrito</label>
                                <div class="col-sm-12">';
                                        $alertas->mostrarDistritos();
                                        
                          echo '
                                </div>                                                              
                        </div>
                </div>

                <div class="form-group" style="margin: auto; margin-bottom: 20px;">
                    <div class="items col-sm-12">
                       <button class="btn btn-danger" id="alertas">Mostrar</button>
                    </div>    
                </div>
                
            </div>
        </div>
</div>';
?>