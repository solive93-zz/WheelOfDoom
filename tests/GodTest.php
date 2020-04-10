<?php
use PHPUnit\Framework\TestCase;
use App\God;

final class GodTest extends TestCase
{
    public function test_a_name_is_not_selected_twice()
    {
        $coders = array (0 => array('id' => 1, 'name' => 'Alejandro', 'status' => 'alive'),
                         1 => array('id' => 2, 'name' => 'Alberto', 'status' => 'alive'),
                         2 => array('id' => 3, 'name' => 'Bruna', 'status' => 'alive'),
                         3 => array('id' => 4, 'name' => 'Sebastian', 'status' => 'alive'),
                         4 => array('id' => 5, 'name' => 'Sergi', 'status' => 'alive') );
        
        $god = new God();
        $firstPick = $god->selectRandomly($coders);
        $secondPick = $god->selectRandomly($coders);
        $thirdPick = $god->selectRandomly($coders);

        $this->assertNotEquals($firstPick, ($secondPick || $thirdPick));
    }
}