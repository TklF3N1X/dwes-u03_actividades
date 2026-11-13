<?php
class Character {
    private $name;
    private $age;
    private $genre;
    private $species;

    public function __construct($name, $genre, $age = -1, $species = 'humano') {
        $this->name = $name;
        $this->genre = $genre;
        $this->age = $this->checkAge($age);
        $this->species = $this->checkSpecies($species);
    }

    public function __get(string $property): mixed {
        return $this->$property;
    }

    public function __set(string $property, mixed $value): void {
        if ($property == 'age') {
            $this->age = $this->checkAge($value);
        } else if ($property == 'species') {
            $this->species = $this->checkSpecies($value);
        } else {
            $this->$property = $value;
        }
    }

    private function checkAge(int $age): int {
        if ($age < 0) {
            return -1;
        }
        return $age;
    }

    private function checkSpecies(string $species): string {
        if (preg_match('/[0-9]/', $species)) {
            return 'desconocida';
        }
        return $species;
    }
}
?>