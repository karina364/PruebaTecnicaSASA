<h3>Usuarios</h3>
<?php

    $pagina_inicio=file_get_contents("https://jsonplaceholder.typicode.com/users");
    $pagina_inicio=json_decode($pagina_inicio,true);
    

    echo ' 
      <table border=1>
        <tr>
          <th>Id:</th>
          <th>Nombre:</th>
          <th>Nombre de Usuario</th>
          <th>Correo Electrónico:</th>
        </tr>
    ';
     


    foreach ($pagina_inicio as $key => $value){
      $id = $value["id"];
      $name = $value["name"];
      $username = $value["username"];
      $email = $value["email"];
            
      
      echo '
      
        <tr>
          <td>'. $id .'</td>
          <td><a href="index.php?userId='. $id .'">'.$name.'</a></td>
          <td>'.$username.'</td>
          <td>'. $email .'</td>
                  
      ';
       
    }    

    echo '
      </tr> 
    </table>';
    
?>