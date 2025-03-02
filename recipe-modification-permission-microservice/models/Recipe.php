<?php
class Recipe {
    public $id;
    public $user_id;

    public function __construct($id, $user_id) {
        $this->id = $id;
        $this->user_id = $user_id;
    }
}
?>
