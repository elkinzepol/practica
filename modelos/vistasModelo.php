<?php

    //modelo que permite obtener las vistas del index Este modelo no interactua con las BD solo con las vistas
    class vistasModelo{
        /*---------- Modelo obtener vistas-----------------*/
        protected Static function obtener_vistas_modelo($vistas){
            /*listas palabras blancas accesibles en URL*/
            $listaBlanca=[];
            //comprobar si la url esta dentro de la lista blanca existe 
            if(in_array($vista,$listaBlanca)){
                //comprobar si existe la vista de la lista blanca 
                if(is_file("./vistas/contenidos/".$vistas."-view.php")){
                    $contenido="./vistas/contenidos/".$vistas."-view.php";
                }else{
                    $contenido="404";//La url en vista no exite en el sistema
                }
                //si El valor de la vista 
            }else if($vistas=="login"|| $vistas=="index"){
                $contenido="login"; //vista a mostrar
            }else{
                $contenido="404";//La url en vista no exite en el sistema
            }
            return $contenido;
        }

    }