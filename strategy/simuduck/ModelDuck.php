<?php

include_once 'AbstractDuck.php';
include_once 'FlyNoWay.php';
include_once 'QuackConcrete.php';

class ModelDuck extends AbstractDuck {

    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new QuackConcrete();
    }

    public function display()
    {
        echo "I'm a real model duck\n";
    }

}
