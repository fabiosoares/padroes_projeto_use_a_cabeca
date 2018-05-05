<?php

class MuteQuack implements QuackBehaviorInterface {

    public function quack()
    {
        echo "<< Silence >>\n";
    }

}
