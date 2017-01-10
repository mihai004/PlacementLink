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
     * Testing asasdas
     */
    public function testCanBeNegated()
    {
        // Arrange add
        $a = new Money(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());
    }

}
