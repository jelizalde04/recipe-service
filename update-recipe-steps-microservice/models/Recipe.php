<?php
class Recipe {
    public $id;
    public $steps;

    public function __construct($id, $steps) {
        $this->id = $id;
        $this->steps = $steps;
    }
}
?>
