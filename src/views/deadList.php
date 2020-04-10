<?php
use App\CodersRepository;

    $repository = new CodersRepository;
    $aliveCoders = $repository->getAliveCoders();
    foreach ($aliveCoders as $coder)
    {
      ?><tr>
        <td><?php echo $coder['name']?></td>
        </tr>
        <?php
    }
?>
    