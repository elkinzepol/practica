<?php
    
    require_once "./modelos/vistasModelo.php";

    //clase contorlador de vistas Hereda de clase vistas modelo
    class vistasControlador extends vistasModelo{
         /*---------- Controlador par obtener plantilla -----------------*/

        public function obtener_plantilla_controlador(){
            return require_once "./vistas/plantilla.php";

        }   

        public function obtener_vistas_controlador(){
            //if(isset($_GET['views']) viene del .htcacces
            if(isset($_GET['views'])){
                //dividir string lo que viene del get views 
                $ruta=explode("/",$_GET['views']);
                //devolver y definir variable y enviar parametros al modelo
                //$nombre archivo modelo vista  :: poder llamar function ya que fue declarada static
                $respuesta=vistasModelo::obtener_vistas_modelo($ruta[0]);
            }else{
                //si no se obtiene nada deuvelve al login
                $respuesta="login";

            }
            return $respuesta;

        }
    }