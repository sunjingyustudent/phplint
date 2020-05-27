<?php

class SingleTest{

    private static $instance;

    private function __construct() {}

    public static function getInstance(){
        if (is_object(self::$instance)) {
            return self::$instance;
        }
        self::$instance = new SingleTest();
        return self::$instance;
    }

    public static function aa(int $stroe = 0){
$a = array("iii"=>111);
    }
}

$a = SingleTest::getInstance();
var_dump($a);

