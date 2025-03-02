<?php
class Recipe {
    public $id;
    public $name;
    public $ingredients;
    public $steps;
    public $created_at;

    public function __construct($name, $ingredients, $steps) {
        $this->name = $name;
        $this->ingredients = $ingredients;
        $this->steps = $steps;
        $this->created_at = date('Y-m-d H:i:s');
    }
}
?>
