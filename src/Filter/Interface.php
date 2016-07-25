<?php

namespace Batmage\Filter;

/**
 * Filter classes should filter incoming data against a variety of conditions
 *
 * @package CreditCardValidator
 * @author  Robbie Averill <robbie@averill.co.nz>
 */
interface Interface
{
    /**
     * Filter the input data, returning sanitised data
     * @param  mixed $input
     * @return mixed
     */
    public function filter($input);
}
