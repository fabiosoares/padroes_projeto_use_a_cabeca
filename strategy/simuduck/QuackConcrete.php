<?php

/**
 * I changed the name of this class because PHP consider the method quack as contructor
 */
class QuackConcrete implements QuackBehaviorInterface {

    public function quack()
    {
        echo "Quack\n";
    }

}
