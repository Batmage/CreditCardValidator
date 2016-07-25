<?php
namespace Batmage\CreditCardValidator\Filter;

/**
 * The default filter will strip whitespaces and dashes from the incoming data
 *
 * @package CreditCardValidator
 * @author  Robbie Averill <robbie@averill.co.nz>
 */
class FilterDefault implements FilterInterface
{
    /**
     * {@inheritDoc}
     * @param  mixed $input
     * @return string
     */
    public function filter($input)
    {
        return str_replace(array(' ', '-'), '', $input);
    }
}
