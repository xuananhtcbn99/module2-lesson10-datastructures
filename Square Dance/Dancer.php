<?php

class Dancer
{
public $name;
public $gender;

    /**
     * @param $name
     * @param $gender
     */
    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }


}