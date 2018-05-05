<?php

include_once 'FlyBehaviorInterface.php';
include_once 'QuackBehaviorInterface.php';

abstract class AbstractDuck {

    protected $flyBehavior;
    protected $quackBehavior;

    public function __construct()
    {
        
    }

    public abstract function display();

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        echo "All ducks float, even decoys!\n";
    }

    public function setFlyBehavior($fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior($qb)
    {
        $this->quackBehavior = $qb;
    }

}
