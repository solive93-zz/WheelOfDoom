<?php
namespace App;
use App\Coder;
use App\CodersRepository;

class God 
{   

    public function selectRandomly(array $coders) :array
    {   
        shuffle($coders);
        $selectedCoder = array_shift($coders);
        
        return $selectedCoder;
    }

    //not tested 
    public function kill(int $id) :void 
    {
        //Coder::updateStatusById();
        $coder = new Coder;
        $coder-> updateStatusById($id);  
    }

    //not tested 
    private function resurrectAll() :void
    {
        $coder = new Coder;
        $coder-> updateStatusById($id);
        //Coder::updateAll();
    }

}