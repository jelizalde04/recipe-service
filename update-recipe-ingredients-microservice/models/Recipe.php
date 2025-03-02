<?php
class Recipe {
    public $id;
    public $ingredients;

    public function __construct($id, $ingredients) {
        $this->id = $id;
        $this->ingredients = $ingredients;
    }
}
?>
