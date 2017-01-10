<?php require('../Models/Money.php');
use PHPUnit\Framework\TestCase;
/**
 * Created by PhpStorm.
 * User: eqp326
 * Date: 10/01/17
 * Time: 11:27
 */
class MoneyTest extends TestCase
{
    /**
     * Testing
     */
    public function testCanBeNegated()
    {
        $flag = false;
        // Arrange asdasdfasfasdfasd
        $a = new Money(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());
        $flag = true;
        return $flag;
    }

    /**
     * @depends testCanBeNegated
     */
    public function checkValue($flag){

        if($flag = true) {
            echo 'true';
        }
        else {
            echo 'false';
        }
    }
}
