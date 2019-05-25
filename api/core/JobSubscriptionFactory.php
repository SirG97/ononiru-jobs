<?php

class JobSubscriptionFactory {
    public function __construct($type){
        $type = trim($type);

        if(is_null($type)) throw new Exception('Job Plan Type should not be null');
        
    }
}