<?php

class Recipe
{
    public $id;
    public $name;
    public $userId;
    public $ingredients;
    public $steps;

    public function __construct($id, $name, $userId, $ingredients, $steps)
    {
        $this->id = $id;
        $this->name = $name;
        $this->userId = $userId;
        $this->ingredients = $ingredients;
        $this->steps = $steps;
    }
}
