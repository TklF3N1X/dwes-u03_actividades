<?php
class Hero {
    private $name;
    private $species;
    private $class;
    private $health;
    private $baseAttack;
    private $baseDefense;
    private $weapons = [];
    private $armor = null;
    private $potions = [];

    public function __construct($name, $species, $class, $health = 50, $baseAttack = 10, $baseDefense = 10) {
        $this->name = $name;
        $this->species = $species;
        $this->checkSpecies($species);
        $this->class = $class;
        $this->checkClass($class);
        $this->health = $health;
        $this->baseAttack = $baseAttack;
        $this->baseDefense = $baseDefense;
    }

    public function __get(string $property): mixed {
        return $this->$property;
    }

    public function __set(string $property, mixed $value): void {
        $this->$property = $value;
    }

    private function checkSpecies(string $specie): bool {
        $species = ['especie1', 'especie2', 'especie3'];

        if (in_array($specie, $species, true)) {
            return true;
        } else {
            $this->species = 'humano';
            return false;
        }
    }

    private function checkClass(string $typeClass): bool {
        $classes = ['guerrero', 'mago', 'arquero'];

        if (in_array($typeClass, $classes, true)) {
            return true;
        } else {
            $this->class = 'ninguna';
            return false;
        }
    }

    public function attack(): int {
        $totalAttack = $this->baseAttack;
        foreach ($this->weapons as $weapon) {
            $totalAttack += $weapon->getAttack();
        }
        return $totalAttack;
    }

    public function defense(int $damage): int {
        $totalDefense = $this->baseDefense;
        if ($this->armor != null) {
            $totalDefense += $this->armor->getDefense();
        }
        $result = $totalDefense - $damage;
        if ($result < 0) {
            return 0;
        }
        return $result;
    }

    public function usePotion(): void {
        if (count($this->potions) == 0) {
            return;
        }
        $bestIndex = 0;
        foreach ($this->potions as $index => $potion) {
            if ($potion->getHealth() > $this->potions[$bestIndex]->getHealth()) {
                $bestIndex = $index;
            }
        }
        $this->health += $this->potions[$bestIndex]->getHealth();
        array_splice($this->potions, $bestIndex, 1);
    }

    public function __toString(): string {
        return 'Nombre: ' . $this->name . '<br>' .
            'Especie: ' . $this->species . '<br>' .
            'Clase: ' . $this->class . '<br>' .
            'Vida: ' . $this->health . '<br>' .
            'Ataque base: ' . $this->baseAttack . '<br>' .
            'Defensa base: ' . $this->baseDefense;
    }
}
?>