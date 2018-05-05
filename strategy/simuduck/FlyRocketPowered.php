<?php

include_once 'FlyBehaviorInterface.php';

class FlyRocketPowered implements FlyBehaviorInterface {

    public function fly()
    {
        echo "I'm flying with a rocket!\n";
    }

}
