<h3>Publicaciones</h3>
<?php
    
    $userId=$_GET["userId"];
    $publicacion=file_get_contents("https://jsonplaceholder.typicode.com/users/$userId/posts");
    $publicacion=json_decode($publicacion,true);
    
    
    echo ' 
      <table border=1>
        <tr>
          <th>Id</th>
          <th>Título</th>
          <th>Contenido</th>
        </tr>
    ';

    

    foreach($publicacion as $clave => $valu){
      $idd = $valu["id"];
      $title = $valu["title"];
      $body = $valu["body"];
      $username = $valu["username"];

    
      echo '
      
        <tr>
          <td>'. $idd.'</td>
          <td><a href="index.php?userId='. $userId .'&postId='. $idd .'"> ' .$title. '</a></td>
          <td>'.$body.'</td>
      
      ';    
      
          
      
    }
      
    echo '
      </tr> 
    </table>'; 

?>