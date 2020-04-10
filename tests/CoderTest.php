<?php
use PHPUnit\Framework\TestCase;
use App\Coder;


final class CoderTest extends TestCase
{
    public function test_if_ids_match()
    {
        $coder = new Coder(5, 'Sebastian', 'alive');
        $idObtanined = $coder->getId();
        $this->assertSame(5, $idObtanined);
    }

    public function test_if_name_matches()
    {
        $coder = new Coder(1, 'Alberto', 'alive');
        $nameObtained = $coder->getName();
        $this->assertSame('Alberto', $nameObtained); 
    }

    public function test_new_coder_is_alive_by_default()
    {
        $coder = new Coder();
        $status = $coder->getStatus();
        $this->assertSame('alive', $status);
    }
} 