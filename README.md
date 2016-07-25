# batmage/credit-card-validator

A simple PHP module to validate credit card numbers using the Luhn algorithm (by default).

[![Build Status](https://travis-ci.org/Batmage/CreditCardValidator.svg?branch=master)](https://travis-ci.org/Batmage/CreditCardValidator) [![Latest Stable Version](https://poser.pugx.org/batmage/credit-card-validator/v/stable)](https://packagist.org/packages/batmage/credit-card-validator) [![License](https://poser.pugx.org/batmage/credit-card-validator/license)](https://packagist.org/packages/batmage/credit-card-validator)

## Installation

Require in your project with composer:

```bash
composer require batmage/credit-card-validator ^1.0
```

## Usage

An example use:

```php
$validator = new \Batmage\CreditCardValidator\Validator;
$result = $validator->validate('4111 1111 1111 1111'); // bool(true)
```

## License

MIT license. See `LICENSE.md` for more information.
