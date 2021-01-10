<?php

class MVCcontroller{

    public function ControllerView(){

        include "mvc_view/mvc_view.php";     

    }

    public function ControllerComponents(){

        
        if(isset($_GET["userId"])){

            $userId=$_GET["userId"];
            
            if(isset($_GET["postId"])){

                $postId=$GET["postId"];                            

            }else{

                $postId = '';
            }

        }else{

            $userId = '';
        }
        /*---------------------------------
            Llamada al modelo 
        ---------------------------------*/

        $chargeModel = new MVCmodel();        
        $chargeModel -> ConexionComponentsController($userId,$postId);
    }

}
?>