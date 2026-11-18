<?php
require_once 'grandprix.php';

class Championship {
    private $grandPrix = [];

    public function addGrandPrix(GrandPrix $grandPrix): void {
        $this->grandPrix[] = $grandPrix;
    }

    public function getGrandPrix() {
        return $this->grandPrix;
    }

    public function getClassification(): array {
        $riders = [];
        foreach ($this->grandPrix as $grandPrix) {
            foreach ($grandPrix->getRiders() as $rider) {
                $riders[$rider->getNumber()] = $rider;
            }
        }

        $classification = array_values($riders);

        usort($classification, function($rider1, $rider2) {
            if ($rider1->getPoints() == $rider2->getPoints()) {
                return 0;
            }
            if ($rider1->getPoints() > $rider2->getPoints()) {
                return -1;
            }
            return 1;
        });
        return $classification;
    }

    public function getBestRider(): ?Rider {
        $classification = $this->getClassification();
        if (count($classification) == 0) {
            return null;
        }
        return $classification[0];
    }

    public function toString(): string {
        $resultado = '<h2>Clasificación general</h2>';
        $classification = $this->getClassification();
        if (count($classification) == 0) {
            return $resultado . 'No hay pilotos registrados.';
        }
        $position = 1;
        foreach ($classification as $rider) {
            $resultado .= '<h3>Puesto ' . $position . '</h3>' .
                          $rider->toString() . '<br><br>';

            $position++;
        }
        return $resultado;
    }
}
?>