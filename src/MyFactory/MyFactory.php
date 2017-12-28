<?php
namespace App\MyFactory;

use App\MyFactory\Sp;
use App\MyFactory\Pb;
use App\MyFactory\Rj;

class MyFactory
{
  private $states = [
    'sp' => Sp::class,
    'pb' => Pb::class,
    'rj' => Rj::class
  ];

  public function create($type){

    $type = strtolower($type);
    if(!$this->states[$type]){
       throw new \Exception('tipo indefinido');
    }

    $obj = new $this->states[$type];
    return $obj;
  }
}
