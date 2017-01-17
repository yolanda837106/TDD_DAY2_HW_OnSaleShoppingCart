<?php

namespace App;

use App\ShoppingCart;

class ShoppingCartTest extends \PHPUnit_Framework_TestCase
{
    public function testGetPriceOfOneFirstSeason()
    {
        // arrange
        $firstSeason = 1;
        $secondSeason = 0;
        $thirdSeason = 0;
        $fourthSeason = 0;
        $fifthSeason = 0;
        $expect = 100;

        // act
        $shoppingCart = new ShoppingCart($firstSeason, $secondSeason, $thirdSeason, $fourthSeason, $fifthSeason);
        $result = $shoppingCart->getPrice();

        // assert
        $this->assertEquals($expect, $result);
    }
}
