<?php

class Recipe
{
    public $id;
    public $name;
    public $ingredients;
    public $steps;

    public function __construct($id, $name, $ingredients, $steps)
    {
        $this->id = $id;
        $this->name = $name;
        $this->ingredients = $ingredients;
        $this->steps = $steps;
    }
}
