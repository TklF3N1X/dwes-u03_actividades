<?php
class Potion {
    private $health;

    public function __construct($health) {
        $this->health = $health;
    }

    public function getHealth() {
        return $this->health;
    }
}
?>