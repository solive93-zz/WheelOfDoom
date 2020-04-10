<?php
namespace App;
use App\CodersRepository;

class Coder extends CodersRepository
{ 
   private $id;
   private $name; 
   private $status;
   
   function __construct(int $id=null, string $name= ' ', string $status='alive') 
   {
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
   }
   
   public function getId() :int
    {
        return $this->id;
    }

    public function getName() :string
    {
        return $this->name;
    }

    public function getStatus() :string
    {
        return $this->status;
    }

    

}
