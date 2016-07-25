<?php
namespace Batmage\CreditCardValidator\Algorithm;

/**
 * Algorithm classes should declare a public validate() method
 *
 * @package CreditCardValidator
 * @author  Robbie Averill <robbie@averill.co.nz>
 */
interface AlgorithmInterface
{
    /**
     * Validate the input data against a specific algorithm, returning a boolean for the result
     * @param  string|int $input
     * @return boolean
     */
    public function validate($input);
}
