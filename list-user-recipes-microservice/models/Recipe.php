<?php
class Recipe {
    public $id;
    public $name;
    public $ingredients;
    public $steps;
    public $created_at;
    public $user_id;

    public function __construct($id, $name, $ingredients, $steps, $created_at, $user_id) {
        $this->id = $id;
        $this->name = $name;
        $this->ingredients = $ingredients;
        $this->steps = $steps;
        $this->created_at = $created_at;
        $this->user_id = $user_id;
    }
}
?>
