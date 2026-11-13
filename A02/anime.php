<?php
class Anime {
    private $title;
    private $author;
    private $year;
    private $genre;
    private $episodes;
    private $characters = [];

    public function __construct($title, $author, $genre, $episodes, $year = -1) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $this->checkYear($year) ? $year : -1;
        $this->genre = $this->checkGenre($genre) ? $genre : 'desconocido';
        $this->episodes = $episodes;
    }

    public function __get(string $property): mixed {
        return $this->$property;
    }

    public function __set(string $property, mixed $value): void {
        if ($property == 'year') {
            $this->year = $this->checkYear($value) ? $value : -1;
        } else if ($property == 'genre') {
            $this->genre = $this->checkGenre($value) ? $value : 'desconocido';
        } else {
            $this->$property = $value;
        }
    }

    private function checkYear(int $year): bool {
        return $year >= 1917;
    }

    private function checkGenre(string $genre): bool {
        $genres = ['Kodomo', 'Shonen', 'Shojo', 'Seinen', 'Josei'];
        return in_array($genre, $genres);
    }

    private function checkCharacter(Character $character): bool {
        foreach ($this->characters as $currentCharacter) {
            if ($currentCharacter->name === $character->name) {
                return true;
            }
        }
        return false;
    }

    public function countCharacters(): int {
        return count($this->characters);
    }

    public function addCharacter(Character $character): bool {
        if ($this->checkCharacter($character)) {
            return false;
        }
        $this->characters[] = $character;
        return true;
    }

    public function removeCharacter(string $name): mixed {
        foreach ($this->characters as $index => $character) {
            if ($character->name === $name) {
                $removedCharacter = $character;
                unset($this->characters[$index]);
                $this->characters = array_values($this->characters);

                return $removedCharacter;
            }
        }
        return false;
    }
}
?>