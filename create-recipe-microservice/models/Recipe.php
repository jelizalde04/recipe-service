<?php

class Recipe
{
    public $name;
    public $ingredients;
    public $steps;

    public function __construct($name, $ingredients, $steps)
    {
        $this->name = $name;
        $this->ingredients = $ingredients;
        $this->steps = $steps;
    }
}
