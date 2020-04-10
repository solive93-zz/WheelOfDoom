<?php
use App\CoderRepository;
use App\Coder;
use App\God;

class KillController
{
    public function checkAndKill()
    {
        $coder = new Coder;
        $god = new God();

        $aliveCoders = $coder->getAliveCoders();
        $aliveCodersCount = count($aliveCoders);
        
        $killCodition = $aliveCodersCount >= 1;
        $victim = $god->selectRandomly($aliveCoders);
        
        if (!$killCondition)
        {
            $killer->resurrectAll();
        }
        
        $this->kill($victim['id']);
    }
}
    
    