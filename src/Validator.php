<?php

namespace Batmage;

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
     * @var Algorithm\Interface
     */
    protected $algorithm;

    /**
     * Holds the filter model for sanitising the input data
     * @var Filter\Interface
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
     * @return Algorithm\Interface
     */
    public function getAlgorithm()
    {
        if (!$this->algorithm) {
            $this->algorithm = new Algorithm\Luhn;
        }
        return $this->algorithm;
    }

    /**
     * Sets the alrogithm class to use for valiation
     * @param  Algorithm\Interface $algorithm
     * @return self
     */
    public function setAlgorithm(Algorithm\Interface $algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }

    /**
     * Gets the filter class to use for sanitising input data
     * @return Filter\Interface
     */
    public function getFilter()
    {
        if (!$this->filter) {
            $this->filter = new Filter\Default;
        }
        return $this->filter;
    }

    /**
     * Sets the filter class to use for sanitising input data
     * @param  Filter\Interface $filter
     * @return self
     */
    public function setFilter(Filter\Interface $filter)
    {
        $this->filter = $filter;
        return $this;
    }
}
