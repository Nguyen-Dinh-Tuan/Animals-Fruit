<?php
include_once (dirname(__FILE__) . '/../Abstrackclass/Fruits.php');


class Orange extends Fruit
{
    public function howToEat()
    {
        return "Orange could be juiced";
        // TODO: Implement howToEat() method.
    }

}