<?php

namespace Ryan\Userretrieval;

class User implements JsonSerializable
{
    public function __construct(array $arr) { 
        $this->array = $arr; 
    } 
  
    public function jsonSerialize() { 
        return $this->array; 
    } 
}


?>