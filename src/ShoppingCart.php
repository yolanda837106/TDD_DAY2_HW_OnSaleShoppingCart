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
        $count_discount_times = 0;
        $left_book = $this->getBookNum($this->shoppingList);
        $result = 0;
        while (0 < $left_book) {
            $season_count = 0;
            foreach ($this->shoppingList as $num) {
                if ($count_discount_times < $num) {
                    $season_count++;
                    $left_book--;
                }
            }
            $result += $season_count * $this->getDiscount($season_count) * $this->priceOfOneBook;
            $count_discount_times++;
        }

        return $result;
    }

    private function getBookNum($shoppingList)
    {
        $book_num = 0;
        foreach ($shoppingList as $num) {
            $book_num += $num;
        }

        return $book_num;
    }

    private function getDiscount($season_count)
    {
        switch ($season_count) {
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
