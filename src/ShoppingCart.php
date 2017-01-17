<?php

namespace App;

class ShoppingCart
{
    private $shoppingList = [];
    private $priceOfOneBook = 100;

    public function __construct($firstSeason = 0, $secondSeason = 0, $thirdSeason = 0, $fourthSeason = 0, $fifthSeason = 0)
    {
        $this->shoppingList = [
            $firstSeason,
            $secondSeason,
            $thirdSeason,
            $fourthSeason,
            $fifthSeason
        ];
    }

    public function getPrice()
    {
        $result = 0;
        $season_count = 0;
        foreach ($this->shoppingList as $num) {
            if (0 < $num) {
                $result += $num * $this->priceOfOneBook;
                $season_count++;
            }
        }

        if (2 === $season_count) {
            $result = $result * 0.95;
        }

        return $result;
    }
}
