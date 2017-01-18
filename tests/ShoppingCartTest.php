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

    public function testGetPriceOfOneFirstSeasonOneSecondSeason()
    {
        // arrange
        $firstSeason = 1;
        $secondSeason = 1;
        $thirdSeason = 0;
        $fourthSeason = 0;
        $fifthSeason = 0;
        $expect = 190;

        // act
        $shoppingCart = new ShoppingCart($firstSeason, $secondSeason, $thirdSeason, $fourthSeason, $fifthSeason);
        $result = $shoppingCart->getPrice();

        // assert
        $this->assertEquals($expect, $result);
    }

    public function testGetPriceOfOneForFirstSecondThirdSeason()
    {
        // arrange
        $firstSeason = 1;
        $secondSeason = 1;
        $thirdSeason = 1;
        $fourthSeason = 0;
        $fifthSeason = 0;
        $expect = 270;

        // act
        $shoppingCart = new ShoppingCart($firstSeason, $secondSeason, $thirdSeason, $fourthSeason, $fifthSeason);
        $result = $shoppingCart->getPrice();

        // assert
        $this->assertEquals($expect, $result);
    }

    public function testGetPriceOfOneForFirstSecondThirdFourthSeason()
    {
        // arrange
        $firstSeason = 1;
        $secondSeason = 1;
        $thirdSeason = 1;
        $fourthSeason = 1;
        $fifthSeason = 0;
        $expect = 320;

        // act
        $shoppingCart = new ShoppingCart($firstSeason, $secondSeason, $thirdSeason, $fourthSeason, $fifthSeason);
        $result = $shoppingCart->getPrice();

        // assert
        $this->assertEquals($expect, $result);
    }

    public function testGetPriceOfOneForAllSeason()
    {
        // arrange
        $firstSeason = 1;
        $secondSeason = 1;
        $thirdSeason = 1;
        $fourthSeason = 1;
        $fifthSeason = 1;
        $expect = 375;

        // act
        $shoppingCart = new ShoppingCart($firstSeason, $secondSeason, $thirdSeason, $fourthSeason, $fifthSeason);
        $result = $shoppingCart->getPrice();

        // assert
        $this->assertEquals($expect, $result);
    }

    public function testGetPriceOfOneFirstOneSecondTwoThirdSeason()
    {
        // arrange
        $firstSeason = 1;
        $secondSeason = 1;
        $thirdSeason = 2;
        $fourthSeason = 0;
        $fifthSeason = 0;
        $expect = 370;

        // act
        $shoppingCart = new ShoppingCart($firstSeason, $secondSeason, $thirdSeason, $fourthSeason, $fifthSeason);
        $result = $shoppingCart->getPrice();

        // assert
        $this->assertEquals($expect, $result);
    }
}
