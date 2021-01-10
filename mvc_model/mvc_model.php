<?php

class MVCmodel{

    public function ConexionComponentsController($userId,$postId){
        include "mvc_view/components/users.php";
        if(isset($_GET["userId"])){
            
            include "mvc_view/components/posts.php";
            
            if(isset($_GET["postId"])){
                
                include "mvc_view/components/comments.php";
            }
        
        
        }
    }
}


?>