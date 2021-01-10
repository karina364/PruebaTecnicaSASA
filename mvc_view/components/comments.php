<h3>Comentarios</h3>

<?php
    $postId=$_GET["postId"];
    $comentario=file_get_contents("https://jsonplaceholder.typicode.com/posts/$postId/comments");
    
    $comentario=json_decode($comentario,true);

    echo ' 
      <table border=1>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Contenido</th>
          <th>Correo Electrónico</th>
        </tr>
    ';
    
    

    foreach ($comentario as $keyy => $comment){
      $iid = $comment["id"];
      $name= $comment["name"];
      $body= $comment["body"];
      $email= $comment["email"];
        
      
      echo '
          
        <tr>
          <td>'. $iid .'</td>
          <td>'. $name .'</td>
          <td><a >' .$body. '</a></td>
          <td>'. $email .'</td>                              
                        
      ';
    }  
      
      echo '
      </tr> 
      </table>';               
          
      
?>