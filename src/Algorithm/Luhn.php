<?php
namespace Batmage\CreditCardValidator\Algorithm;

/**
 * The Luhn algorthm is the industry standard for validating credit card numbers
 *
 * @package CreditCardValidator
 * @author  Robbie Averill <robbie@averill.co.nz>
 */
class Luhn implements AlgorithmInterface
{
    /**
     * {@inheritDoc}
     * @param  string|int $input
     * @return boolean
     */
    public function validate($input)
    {
        $checkDigit = (int) substr(strrev($input), 0, 1);

        $numbers = array_reverse(str_split($input));

        for ($i = 1; $i < count($numbers); $i += 2) {
            $numbers[$i] *= 2;

            if ($numbers[$i] > 9) {
                $numbers[$i] = array_sum(str_split($numbers[$i]));
            }
        }

        $calculatedCheckDigit = (array_sum($numbers) - $checkDigit) * 9 % 10;

        return (int) $calculatedCheckDigit === (int) $checkDigit;
    }
}
