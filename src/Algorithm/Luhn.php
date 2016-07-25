<?php

namespace Batmage\Algorithm;

/**
 * The Luhn algorthm is the industry standard for verifying credit card numbers
 *
 * @package CreditCardValidator
 * @author  Robbie Averill <robbie@averill.co.nz>
 */
interface Interface
{
    /**
     * {@inheritDoc}
     * @param  string|int $input
     * @return boolean
     */
    public function validate($input)
    {
        return true;
    }
}
