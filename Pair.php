<?php
include_once "Dancer.php";
class Pair
{
    protected SplQueue $queueMale;
    protected SplQueue $queueFemale;


    public function __construct()
    {
        $this->queueMale = new SplQueue();
        $this->queueFemale = new SplQueue();
    }

    public function pairDancer()
    {
        while (!$this->queueFemale->isEmpty() && !$this->queueMale->isEmpty()){
            if ( count($this->queueFemale) > count($this->queueMale)){
                return " Nu dang cho " . "<br>";
            }
            else {
                return " Nam dang cho " . "<br>";
            }
        }
    }
}
