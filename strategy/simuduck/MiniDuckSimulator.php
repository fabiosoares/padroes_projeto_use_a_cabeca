<?php

include_once 'MallardDuck.php';
include_once 'ModelDuck.php';
include_once 'FlyRocketPowered.php';

$mallard = new MallardDuck();
$mallard->performQuack();
$mallard->performFly();

$model = new ModelDuck();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();



