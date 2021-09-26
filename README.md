# Learn Pest

This repo contains some example Pest tests from [Pest](https://pestphp.com/). I find it easier to "play" with the
examples to see how they work. Writing passing tests help me to better understand the assertions. The following chapters
have been created:

- [Writing tests](https://pestphp.com/docs/writing-tests) tests/WritingTestsTest.php
- [Assertions](https://pestphp.com/docs/assertions) tests/AssertionsTest.php
- [Expectations](https://pestphp.com/docs/expectations) tests/ExpectationsTest.php

## Installation

This project only has Pest as a dev dependency. The installation is similar to most PHP projects.

### Requirements

- [PHP 8.0+](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org)

Recommended:

- [Git](https://git-scm.com/downloads)

### Clone or Download this Project from GitHub

See [Cloning a repository](https://docs.github.com/en/repositories/creating-and-managing-repositories/cloning-a-repository) for details on how to create a
local copy of this project on your computer.

For example:

```shell
git clone git@github.com:Pen-y-Fan/learn-pest.git
```

### Install the Dependencies

The project uses Pest PHP, the tests has been written using PHP 8+ named parameters. Composer is highly recommended
installing the dependencies.

From the root of the project run composer install from the command line:

```shell script
cd learn-pest
composer install
```

### Testing

Run all the tests

```shell script
composer test
```

Output will be similar to:

```text
> pest

   PASS  Tests\AssertionsTest
  ✓ it asserts true is true
  ✓ it asserts false is false
  ✓ it asserts array to be an array
  ✓ it asserts count is four
  ✓ it asserts array is equal
  ✓ it asserts array is empty
  ✓ it asserts string contains string

   PASS  Tests\ExampleTest
  ✓ example

   PASS  Tests\ExpectationsTest
  ✓ it asserts true is true
  ✓ it Asserts that two variables have the same type and value. Used on objects, it asserts that the two variables reference the same object:
  ✓ it Asserts empty string to be empty
  ✓ it Asserts true to be true
  ✓ it Asserts 1 or "1" to be truthy
  ✓ it Asserts that the value is false
  ✓ it Asserts 0 or "" or empty array or null to be falsy
  ✓ it Asserts that the value is greater than the expected one
  ✓ it Asserts that the value is greater than or equal to the expected one
  ✓ it Asserts that the value is lesser than the expected one
  ✓ it Asserts that the value is lesser than or equal to the expected one
  ✓ it Asserts that all given needles are elements of the value
  ✓ it Asserts that the count matches the number of elements of value
  ✓ it Asserts that the value contains the property name
  ✓ it Asserts that the value contains the provided properties names
  ✓ it Asserts that the value array matches the given array subset
  ✓ it Asserts that the value object matches a subset of the properties of a given object
  ✓ it Asserts that two variables have the same value
  ✓ it Asserts that two variables have the same value. The contents of value and expected are canonicalized before they are compared.
  ✓ it Asserts that the absolute difference between value and expected is lower than delta
  ✓ it Asserts that the value is one of the given values
  ✓ it Asserts that the value is infinite
  ✓ it Asserts that the value is an instance of class
  ✓ it Asserts that the value is an array
  ✓ it Asserts that the value is of type bool
  ✓ it Asserts that the value is of type callable
  ✓ it Asserts that the value is of type float
  ✓ it Asserts that the value is of type integer
  ✓ it Asserts that the value is of type iterable
  ✓ it Asserts that the value is of type numeric
  ✓ it Asserts that the value is of type object
  ✓ it Asserts that the value is of type resource
  ✓ it Asserts that the value is of type scalar
  ✓ it Asserts that the value is of type string
  ✓ it Asserts that the value is a JSON string
  ✓ it Asserts that the value is not a number (NaN)
  ✓ it Asserts that the value is null
  ✓ it Asserts that the value array contains the provided key
  ✓ it Asserts that the value array contains the provided keys
  ✓ it Asserts that the number matches the values string length, or number of elements of the iterable value
  ✓ it Asserts that the value is a directory
  ✓ it Asserts that the value is a directory and is readable
  ✓ it Asserts that the value is a directory and is writable
  ✓ it Asserts that the value starts with the provided string
  ✓ it Asserts that a closure throws an exception class exception message or the combination of both
  ✓ it Asserts two exceptions with their specific messages
  ✓ it Asserts that the value matches a regular expression
  ✓ it Asserts that the value ends with the provided string
  ✓ it Asserts that the value matches a specified PHPUnit constraint
  ✓ it Asserts that the value matches a complex group of constraints
  ✓ it Asserts that the value matches a custom constraint
  ✓ it Asserts that Pest can chain multiple expectations in a single test
  ✓ it Pass a JSON string to the json method to assert it is a valid JSON and chain other expectations
  ✓ it uses the each modifier to create an expectation on each item of the given iterable
  ✓ it uses the not modifier before a check to invert it
  ✓ it uses the sequence method to specify a sequential set of expectations for each item of the given iterable
  ✓ it uses the sequence method with associative iterables

   PASS  Tests\WritingTestsTest
  ✓ asserts true is true
  ✓ it asserts true is true

  Tests:  67 passed
  Time:   0.15s
```

## Contributing

This is a **personal project**. Contributions are **not** required. Anyone interested in developing this project are
welcome to fork or clone for your own use.

## License

MIT License (MIT). Please see [License File](LICENSE.md) for more information.
