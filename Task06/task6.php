<?php

    function makeRational($a, $b) {
        if($b < 0){
            $a = -$a;
            $b = -$b;
        }
        return [
            'numer' => $a / gcd($a, $b),
            'denom'=> $b / gcd($a, $b),
        ];
    }

    function getNumer($rat) {
        return $rat['numer'];
    }

    function getDenom($rat) {
        return $rat['denom'];
    }

    function add($rat1, $rat2) {
        $numerRat1 = getNumer($rat1);
        $numerRat2 = getNumer($rat2);
        $denomRat1 = getDenom($rat1);
        $denomRat2 = getDenom($rat2);

        $denomRat = $denomRat1 * $denomRat2;
        $numerRat = $numerRat1 * $denomRat2 + $numerRat2 * $denomRat1;

        return makeRational($numerRat, $denomRat);
    }

    function sub($rat1, $rat2) {
        $numerRat1 = getNumer($rat1);
        $numerRat2 = getNumer($rat2);
        $denomRat1 = getDenom($rat1);
        $denomRat2 = getDenom($rat2);

        $denomRat = $denomRat1 * $denomRat2;
        $numerRat = $numerRat1 * $denomRat2 - $numerRat2 * $denomRat1;

        return makeRational($numerRat, $denomRat);
    }


/* Функция gcd находит наибольший общий делитель двух чисел*/
    function gcd($a, $b)
    {
        return ($a % $b) ? gcd($b, $a % $b) : abs($b);
    }


/* Функция RatToString возвращает строковое представление числа
  (используется для отладки)
*/
    function ratToString($rat)
    {
        return getNumer($rat) . '/' . getDenom($rat);
    }

    $rat1 = makeRational(3, 9);
    print ratToString($rat1)."<br>";
    $rat2 = makeRational(10, 3);
    print ratToString(add($rat1, $rat2))."<br>";
    print ratToString(sub($rat1, $rat2))."<br>";
    $rat3 = makeRational(-4, 16);
    print ratToString($rat3)."<br>";
    $rat4 = makeRational(12, 5);
    print ratToString(add($rat3, $rat4))."<br>";
    print ratToString(sub($rat3, $rat4))."<br>";
    $rat5 = makeRational(3, -9);
    print ratToString($rat5)."<br>";