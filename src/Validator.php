<?php

namespace Batmage\CreditCardValidator;

use Batmage\CreditCardValidator\Algorithm\AlgorithmInterface;
use Batmage\CreditCardValidator\Algorithm\Luhn;
use Batmage\CreditCardValidator\Filter\FilterInterface;
use Batmage\CreditCardValidator\Filter\FilterDefault;

/**
 * The validator class handles filtering and validating credit card numbers
 *
 * @package CreditCardValidator
 * @author  Robbie Averill <robbie@averill.co.nz>
 */
class Validator
{
    /**
     * Holds the algorithm model for processing validation
     * @var AlgorithmInterface
     */
    protected $algorithm;

    /**
     * Holds the filter model for sanitising the input data
     * @var FilterInterface
     */
    protected $filter;

    /**
     * Validate a credit card number. It will be filtered then validated and the result returned as a boolean.
     * @param  string|int $input
     * @return boolean
     */
    public function validate($input)
    {
        if (empty($input)) {
            return false;
        }

        $input = $this->getFilter()->filter($input);

        return $this->getAlgorithm()->validate($input);
    }

    /**
     * Gets the algorithm class to use for validation
     * @return AlgorithmInterface
     */
    public function getAlgorithm()
    {
        if (!$this->algorithm) {
            $this->algorithm = new Luhn;
        }
        return $this->algorithm;
    }

    /**
     * Sets the alrogithm class to use for valiation
     * @param  AlgorithmInterface $algorithm
     * @return self
     */
    public function setAlgorithm(AlgorithmInterface $algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }

    /**
     * Gets the filter class to use for sanitising input data
     * @return FilterInterface
     */
    public function getFilter()
    {
        if (!$this->filter) {
            $this->filter = new FilterDefault;
        }
        return $this->filter;
    }

    /**
     * Sets the filter class to use for sanitising input data
     * @param  FilterInterface $filter
     * @return self
     */
    public function setFilter(FilterInterface $filter)
    {
        $this->filter = $filter;
        return $this;
    }
}
