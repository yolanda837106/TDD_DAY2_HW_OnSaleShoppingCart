<?php

namespace App;

class ShoppingCart
{
    private $shoppingList = [];
    private $priceOfOneBook = 100;
    private $season_count = 0;

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
        $book_count = 0;
        foreach ($this->shoppingList as $num) {
            if (0 < $num) {
                $this->season_count++;
                $book_count += $num;
            }
        }

        $result = $this->season_count * $this->getDiscount() * $this->priceOfOneBook;

        $result += ($book_count - $this->season_count) * $this->priceOfOneBook;

        return $result;
    }

    public function getDiscount()
    {
        switch ($this->season_count) {
            case 1:
                $discount = 1;
                break;
            case 2:
                $discount = 0.95;
                break;
            case 3:
                $discount = 0.9;
                break;
            case 4:
                $discount = 0.8;
                break;
            case 5:
                $discount = 0.75;
                break;
        }

        return $discount;
    }
}
