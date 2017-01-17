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
        foreach ($this->shoppingList as $num) {
            $result += $num * $this->priceOfOneBook;
        }

        return $result;
    }
}
