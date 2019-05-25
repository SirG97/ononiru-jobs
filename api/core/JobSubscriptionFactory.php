<?php
namespace Ononiru\Core;

class JobSubscriptionFactory {

    public function __construct($type){
        $type = trim($type);

        if(is_null($type)) throw new Exception('Job Plan Type should not be null');
       
        $this->class_ = new $type.'_plan';
        
    }
}