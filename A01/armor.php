<?php
class Armor {
    private $name;
    private $defense;

    public function __construct($name, $defense) {
        $this->name = $name;
        $this->defense = $defense;
    }

    public function getName(){
        return $this->name;
    }

     public function getDefense(){
        return $this->defense;
    } 

    public function toString(): string {
        return 'Nombre: ' . $this->name . '<br>' .
           'Defensa: ' . $this->defense;
    }
}
?>