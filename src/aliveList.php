<?php
use App\CodersRepository;

    $repository = new CodersRepository();
    $aliveCoders = $repository->getAliveCoders();
    for($i=0; $i < count($aliveCoders)-1; $i++)
    {
        echo "<tr>
        <td><?php echo $aliveCoders[$i]['name']</td>
        </tr>" ;
      
    }
?>
    
    
    
  