<?php
class Weapon {
    private $name;
    private $attack;

    public function __construct($name, $attack) {
        $this->name = $name;
        $this->attack = $attack;
    }

    public function getName(){
        return $this->name;
    }

     public function getAttack(){
        return $this->attack;
    } 

    public function toString(): string {
        return 'Nombre: ' . $this->name . '<br>' .
            'Ataque: ' . $this->attack;
    }
}
?>