<?php
namespace Batmage\CreditCardValidator\Algorithm;

/**
 * Tests that the Luhn algorithm class is behaving as expected
 *
 * @package CreditCardValidator
 * @author  Robbie Averill <robbie@averill.co.nz>
 */
class LuhnTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests that the Luhn validation algorithm is working correctly
     * @param string $input
     * @param bool   $expected
     * @dataProvider validationProvider
     */
    public function testValidateLuhnAlgorithm($input, $expected)
    {
        $validator = new Luhn;
        $result = $validator->validate($input);
        $this->assertSame($expected, $result);
    }

    /**
     * @return array
     */
    public function validationProvider()
    {
        return array(
            array(5555555555554444, true),
            array(5105105105105100, true),
            array(4111111111111111, true),
            array(4012888888881881, true),
            array(79927398710, false),
            array(79927398711, false),
            array(79927398712, false),
            array(79927398713, true),
            array(79927398714, false),
            array(79927398715, false),
            array(79927398716, false),
            array(79927398717, false),
            array(79927398718, false),
            array(79927398719, false)
        );
    }
}
