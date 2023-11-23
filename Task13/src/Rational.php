<?php
namespace Task13;

class Rational {
    public int | float $numer = 0;
    public int | float $denom = 0;
    public function __construct(int | float $a, int | float $b) {
        if($b < 0){
            $a = -$a;
            $b = -$b;
        }
        $this->numer = $a;
        $this->denom = $b;
    }

    public function getNumer(): int | float {
        return $this->numer;
    }

    public function getDenom(): int | float {
        return $this->denom;
    }

    public function add(Rational $rat): Rational {
        $numerRat1 = $this->getNumer();
        $numerRat2 = $rat->getNumer();
        $denomRat1 = $this->getDenom();
        $denomRat2 = $rat->getDenom();

        $denomRat = $denomRat1 * $denomRat2;
        $numerRat = $numerRat1 * $denomRat2 + $numerRat2 * $denomRat1;

        return new Rational($numerRat, $denomRat);
    }

    public function sub(Rational $rat): Rational {
        $numerRat1 = $this->getNumer();
        $numerRat2 = $rat->getNumer();
        $denomRat1 = $this->getDenom();
        $denomRat2 = $rat->getDenom();

        $denomRat = $denomRat1 * $denomRat2;
        $numerRat = $numerRat1 * $denomRat2 - $numerRat2 * $denomRat1;

        return new Rational($numerRat, $denomRat);
    }
}