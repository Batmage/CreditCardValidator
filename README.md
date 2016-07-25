# robbieaverill/credit-card-validator

A simple PHP module to validate credit card numbers using the Luhn algorithm (by default).

## Installation

Require in your project with composer:

```php
composer require robbieaverill/credit-card-validator ^1.0
```

## Usage

An example use:

```php
$validator = new \Batmage\CreditCardValidator\Validator;
$result = $validator->validate('4111 1111 1111 1111'); // true
```

## License

MIT license. See `LICENSE.md` for more information.
