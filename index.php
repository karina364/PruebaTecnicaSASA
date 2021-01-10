    <?php

        require_once "mvc_controller/mvc_controller.php";
        require_once "mvc_model/mvc_model.php";
        
        /*---------------------------------
            Llamada al controlador/ Carga 
            mvc_view.php
        ---------------------------------*/

        $chargeView = new MVCcontroller();
        $chargeView -> ControllerView();
        
    ?>