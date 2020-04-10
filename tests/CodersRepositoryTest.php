<?php
use PHPUnit\Framework\TestCase;
use App\CodersRepository;

 
final class CoderRepositoryTest extends TestCase
{   
    public function test_if_getAllCoders_returns_an_array()
    {
        $repository = new CodersRepository();
        $allCoders = $repository->getAllCoders();
        print_r($allCoders);   //  -------------> visual feedback
        $this->assertIsArray($allCoders);
    }

    public function test_if_getDeadCoders_returns_an_array()
    {
        $repository = new CodersRepository();
        $deadCoders = $repository->getDeadCoders();
        
        $this->assertIsArray($deadCoders);
    }

    public function test_if_getAliveCoders_returns_an_array()
    {
        $repository = new CodersRepository();
        $aliveCoders = $repository->getAliveCoders();
        
        $this->assertIsArray($aliveCoders);
    }

    public function test_if_coders_are_among_coders_db()
    {
        $repository = new CodersRepository();
        $allCoders = $repository->getAllCoders();
        
        $firstCoder = $allCoders[0];
        $secondCoder = $allCoders[2];
        $thirdCoder = $allCoders[3];
        
        $this->assertTrue(in_array($firstCoder, $allCoders));
        $this->assertTrue(in_array($secondCoder, $allCoders));
        $this->assertTrue(in_array($thirdCoder, $allCoders));
    }

    
}