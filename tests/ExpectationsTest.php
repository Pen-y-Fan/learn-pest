<?php
declare(strict_types=1);

// https://pestphp.com/docs/expectations
it(
    description: 'asserts true is true',
    closure: function () {
        // assertion
        $this->assertTrue(
            condition: true
        );

        // expectation
        expect(
            value: true
        )->toBeTrue();
    }
);

it(
    description: 'Asserts that two variables have the same type and value. Used on objects, it asserts that the two variables reference the same object:',
    closure: function () {

        $colour = "Pink";

        expect(
            value: $colour
        )->toBe(
            expected: "Pink"
        );
    }
);

it(
    description: 'Asserts empty string to be empty',
    closure: function () {

        $empty = "";

        expect(
            value: $empty
        )->toBeEmpty();
    }
);

it(
    description: 'Asserts true to be true',
    closure: function () {

        $true = true;

        expect(
            value: $true
        )->toBeTrue();
    }
);

it(
    description: 'Asserts 1 or "1" to be truthy',
    closure: function () {

        $truthy1 = 1;
        $truthyOne = '1';

        expect(
            value: $truthy1
        )->toBeTruthy();

        expect(
            value: $truthyOne
        )->toBeTruthy();

    }
);

it(
    description: 'Asserts that the value is false',
    closure: function () {

        $false = false;

        expect(
            value: $false
        )->toBeFalse();
    }
);

it(
    description: 'Asserts 0 or "" or empty array or null to be falsy',
    closure: function () {

        $zero = 0;
        $emptyString = '';
        $emptyArray = [];
        $null = null;

        expect(
            value: $zero
        )->toBeFalsy();

        expect(
            value: $emptyString
        )->toBeFalsy();

        expect(
            value: $emptyArray
        )->toBeFalsy();

        expect(
            value: $null
        )->toBeFalsy();
    }
);

it(
    description: 'Asserts that the value is greater than the expected one',
    closure: function () {
        $value = 47;

        expect(
            value: $value
        )->toBeGreaterThan(
            expected: 10
        );
    }
);

it(
    description: 'Asserts that the value is greater than or equal to the expected one',
    closure: function () {
        $value = 47;

        expect(
            value: $value
        )->toBeGreaterThanOrEqual(
            expected: 21
        );

        expect(
            value: $value
        )->toBeGreaterThanOrEqual(
            expected: 47
        );
    }
);

it(
    description: 'Asserts that the value is lesser than the expected one',
    closure: function () {
        $value = 47;

        expect(
            value: $value
        )->toBeLessThan(
            expected: 100
        );
    }
);

it(
    description: 'Asserts that the value is lesser than or equal to the expected one',
    closure: function () {
        $value = 47;

        expect(
            value: $value
        )->toBeLessThanOrEqual(
            expected: 100
        );
        expect(
            value: $value
        )->toBeLessThanOrEqual(
            expected: 47
        );
    }
);

it(
    description: 'Asserts that all given needles are elements of the value',
    closure: function () {
        $helloWorld = "Hello World";
        $array = [1, 2, 3, 4];

        expect(
            value: $helloWorld
        )->toContain(
            needles: "Hello"
        );

        expect(
            value: $array
        )->toContain(2, 4);
    }
);

it(
    description: 'Asserts that the count matches the number of elements of value',
    closure: function () {

        $dozen = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        expect(
            value: $dozen
        )->toHaveCount(
            count: 12
        );
    }
);

//toHaveProperty(string $name, $value = null)
it(
    description: 'Asserts that the value contains the property name',
    closure: function () {

        $user = new stdClass();
        $user->name = "Nuno";

        expect(
            value: $user
        )->toHaveProperty(
            name: 'name'
        );

        expect(
            value: $user
        )->toHaveProperty(
            name: 'name',
            value: 'Nuno'
        );
    }
);

//toHaveProperties(iterable $name)
it(
    description: 'Asserts that the value contains the provided properties names',
    closure: function () {

        $user = new stdClass();
        $user->name = "Nuno";
        $user->email = "Nuno@example.com";

        expect(
            value: $user
        )->toHaveProperties(
            names: ['name', 'email']
        );
    }
);

//toMatchArray($array)
it(
    description: 'Asserts that the value array matches the given array subset',
    closure: function () {

        $user = [
            'id' => 1,
            'name' => 'Nuno',
            'email' => 'enunomaduro@gmail.com',
        ];
        expect(
            value: $user
        )->toMatchArray(
            array: [
                'email' => 'enunomaduro@gmail.com',
                'name' => 'Nuno'
            ]
        );
    }
);

//toMatchObject($object)
it(
    description: 'Asserts that the value object matches a subset of the properties of a given object',
    closure: function () {

        $user = new stdClass();
        $user->id = 1;
        $user->email = 'enunomaduro@gmail.com';
        $user->name = 'Nuno';

        expect(
            value: $user
        )->toMatchObject(
            object: [
                'email' => 'enunomaduro@gmail.com',
                'name' => 'Nuno'
            ]
        );
    }
);

//toEqual($expected)
it(
    description: 'Asserts that two variables have the same value',
    closure: function () {

        $title = 'Hello World';

        expect(
            value: $title
        )->toEqual(
            expected: 'Hello World'
        );
    }
);

//toEqualCanonicalizing($expected)
// For instance, when the two variables are arrays, then these arrays are sorted before they are compared. When they are objects, each object is converted to an array containing all private, protected, and public attributes.
it(
    description: 'Asserts that two variables have the same value. The contents of value and expected are canonicalized before they are compared.',
    closure: function () {

        $array = [4, 2, 1];

        expect(
            value: $array
        )->toEqualCanonicalizing(
            expected: [2, 4, 1]
        );
    }
);

//toEqualWithDelta($expected, float $delta)
it(
    description: 'Asserts that the absolute difference between value and expected is lower than delta',
    closure: function () {

        // expected === ( expected +/- delta)
        // any value between 5 and 15 will pass:
        expect(
            value: 5
        )->toEqualWithDelta(
            expected: 10,
            delta: 5
        );
        expect(
            value: 15
        )->toEqualWithDelta(
            expected: 10,
            delta: 5
        );
    }
);

//toBeIn()
it(
    description: 'Asserts that the value is one of the given values',
    closure: function () {

        $response = new stdClass();
        $response->httpCode = 301;

        expect(
            value: $response->httpCode
        )->toBeIn(
            values: [200, 301, 302]
        );
    }
);

//toBeInfinite()
it(
    description: 'Asserts that the value is infinite',
    closure: function () {

        $universe = INF;

        expect(
            value: $universe
        )->toBeInfinite();
    }
);

//toBeInstanceOf($class)
it(
    description: 'Asserts that the value is an instance of class',
    closure: function () {

        $user = new stdClass();

        expect(
            value: $user
        )->toBeInstanceOf(
            class: stdClass::class
        );
    }
);

//toBeArray()
it(
    description: 'Asserts that the value is an array',
    closure: function () {

        $vegetables = ['carrot', 'potato'];

        expect(
            value: $vegetables
        )->toBeArray();
    }
);

//toBeBool()
it(
    description: 'Asserts that the value is of type bool',
    closure: function () {

        $isActive = true;
        $isInactive = false;

        expect(
            value: $isActive
        )->toBeBool();
        expect(
            value: $isInactive
        )->toBeBool();
    }
);

//toBeCallable()
it(
    description: 'Asserts that the value is of type callable',
    closure: function () {

        /** @noinspection PhpUnused */
        function controller()
        {
        }

        $controller = 'controller';

        expect(
            value: $controller
        )->toBeCallable();
    }
);

//toBeFloat()
it(
    description: 'Asserts that the value is of type float',
    closure: function () {

        $height = 1.8;

        expect(
            value: $height
        )->toBeFloat();
    }
);

//toBeInt()
it(
    description: 'Asserts that the value is of type integer',
    closure: function () {

        $count = 47;

        expect(
            value: $count
        )->toBeInt();
    }
);


//toBeIterable()
it(
    description: 'Asserts that the value is of type iterable',
    closure: function () {

        $value = [1, 2, 3];

        expect($value)->toBeIterable();
    }
);

//toBeNumeric()
it(
    description: 'Asserts that the value is of type numeric',
    closure: function () {

        $age = 100;

        expect($age)->toBeNumeric();
    }
);


//toBeObject()
it(
    description: 'Asserts that the value is of type object',
    closure: function () {

        $post = new stdClass();
        expect(
            value: $post
        )->toBeObject();
    }
);

//toBeResource()
it(
    description: 'Asserts that the value is of type resource',
    closure: function () {

        $resource = fopen(
            filename: __DIR__ . '/ExpectationsTest.php',
            mode: 'rb'
        );

        expect(
            value: $resource
        )->toBeResource();

        fclose(
            stream: $resource
        );
    }
);

//toBeScalar()
it(
    description: 'Asserts that the value is of type scalar',
    closure: function () {

        $bool = true;
        $int = 56;
        $float = 10.7;
        $string = 'Hello World';
        $array = [1, 2, 3];
        $class = new stdClass();

        expect(
            value: $bool
        )->toBeScalar();

        expect(
            value: $int
        )->toBeScalar();

        expect(
            value: $float
        )->toBeScalar();

        expect(
            value: $string
        )->toBeScalar();

        expect(
            value: $array
        )->not()->toBeScalar();

        expect(
            value: $class
        )->not()->toBeScalar();
    }
);

//toBeString()
it(
    description: 'Asserts that the value is of type string',
    closure: function () {

        $string = "Hello World";

        expect(
            value: $string
        )->toBeString();
    }
);

//toBeJson()
it(
    description: 'Asserts that the value is a JSON string',
    closure: function () {

        $json = '{"hello":"world"}';

        expect(
            value: $json
        )->toBeJson();
    }
);

//toBeNan()
it(
    description: 'Asserts that the value is not a number (NaN)',
    closure: function () {

        $nan = NAN;

        expect(
            value: $nan
        )->toBeNan();
    }
);

//toBeNull()
it(
    description: 'Asserts that the value is null',
    closure: function () {

        $null = null;

        expect(
            value: $null
        )->toBeNull();
    }
);

//toHaveKey(string $key)
it(
    description: 'Asserts that the value array contains the provided key',
    closure: function () {

        $array['key-a'] = "a value";

        expect(
            value: $array
        )->toHaveKey(
            key: 'key-a'
        );

        //You may pass a second parameter to assert that the value at the given key is equal to something:
        expect(
            value: ['foo' => 'bar']
        )->toHaveKey(
            key: 'foo',
            value: 'bar'
        );

        //This expectation also supports dot notation for reaching deeper into nested arrays:
        expect(
            value: ['user' => ['nuno' => 'maduro']]
        )->toHaveKey(
            key: 'user.nuno'
        );

        expect(
            value: ['user' => ['nuno' => 'maduro']]
        )->toHaveKey(
            key: 'user.nuno',
            value: 'maduro'
        );
    }
);

//toHaveKeys(array $keys)
it(
    description: 'Asserts that the value array contains the provided keys',
    closure: function () {

        $array = [
            'key-a' => 'value',
            'key-b' => 'value'
        ];

        expect(
            value: $array
        )->toHaveKeys(
            keys: ['key-a', 'key-b']
        );

        //This expectation also supports dot notation for reaching deeper into nested arrays:
        expect(
            value: ['user' => ['nuno' => 'maduro', 'luke' => 'downing']]
        )->toHaveKeys(
            keys: ['user.nuno', 'user.luke']
        );
    }
);

//toHaveLength(int $number)
it(
    description: 'Asserts that the number matches the values string length, or number of elements of the iterable value',
    closure: function () {

        expect(
            value: 'pest'
        )->toHaveLength(number: 4);

        expect(
            value: ['Nuno', 'Maduro']
        )->toHaveLength(number: 2);

        expect(
            value: 'four'
        )->not->toHaveLength(number: 5);

        //expect(true)->toHaveLength(4); //throws a `BadMethodCallException` when the expectation value type is not supported.
    }
);

//toBeDirectory()
it(
    description: 'Asserts that the value is a directory',
    closure: function () {

        $dir = __DIR__;
        expect(
            value: $dir
        )->toBeDirectory();
    }
);

//toBeReadableDirectory()
it(
    description: 'Asserts that the value is a directory and is readable',
    closure: function () {

        $dir = __DIR__;

        expect(
            value: $dir
        )->toBeReadableDirectory();
    }
);

//toBeWritableDirectory()
it(
    description: 'Asserts that the value is a directory and is writable',
    closure: function () {

        $dir = __DIR__;

        expect(
            value: $dir
        )->toBeWritableDirectory();
    }
);

//toStartWith(string $expected)
it(
    description: 'Asserts that the value starts with the provided string',
    closure: function () {

        $content = "Hello world";

        expect(
            value: $content
        )->toStartWith(
            expected: 'Hello'
        );
    }
);

//toThrow()
it(
    description: 'Asserts that a closure throws an exception class exception message or the combination of both',
    closure: function () {

        expect(
        /**
         * @throws Exception
         */
            value: fn() => throw new Exception('Something happened.'))
            ->toThrow(
                exception: Exception::class
            );

        expect(
        /**
         * @throws Exception
         */
            value: fn() => throw new Exception('Something happened.')
        )->toThrow(
            exception: 'Something happened.'
        );

        expect(
        /**
         * @throws Exception
         */
            value: fn() => throw new Exception('Something happened.')
        )->toThrow(
            exception: Exception::class,
            exceptionMessage: 'Something happened.'
        );
    }
);

//You may assert more than one exception per test:
it(description: 'Asserts two exceptions with their specific messages',
    closure: function () {
        expect(
        /**
         * @throws Exception
         */
            value: fn() => throw new Exception(
                message: 'Error 1')
        )->toThrow(
            exception: Exception::class,
            exceptionMessage: 'Error 1'
        );

        expect(
        /**
         * @throws Exception
         */
            value: fn() => throw new Exception(
                message: 'Error 2')
        )->toThrow(
            exception: Exception::class,
            exceptionMessage: 'Error 2'
        );

        //It is also possible to use not() modifier together with toThrow():
        expect(
            value: fn($x, $y) => $x + $y
        )->not->toThrow(
            exception: Exception::class
        );
    }
);


//toMatch(string $expression)
it(
    description: 'Asserts that the value matches a regular expression',
    closure: function () {

        expect(
            value: 'Hello World'
        )->toMatch(
            expression: '/^hello wo.*$/i'
        );
    }
);

//toEndWith(string $expected)
it(
    description: 'Asserts that the value ends with the provided string',
    closure: function () {

        $content = 'Hello World';

        expect(
            value: $content
        )->toEndWith(
            expected: 'World'
        );
    }
);

//use PHPUnit\Framework\Constraint\IsTrue;

//toMatchConstraint(Constraint $constraint)
it(
    description: 'Asserts that the value matches a specified PHPUnit constraint',
    closure: function () {

        expect(
            value: true
        )->toMatchConstraint(
            constraint: new PHPUnit\Framework\Constraint\IsTrue()
        );
    }
);

//use PHPUnit\Framework\Constraint\IsFalse;
//use PHPUnit\Framework\Constraint\IsType;
it(
    description: 'Asserts that the value matches a complex group of constraints',
    closure: function () {
        expect(
            value: true
        )->toMatchConstraint(
            constraint: $this->logicalAnd(
                $this->logicalNot(
                    constraint: new PHPUnit\Framework\Constraint\IsFalse()
                ),
                new PHPUnit\Framework\Constraint\IsType(PHPUnit\Framework\Constraint\IsType::TYPE_BOOL)
            )
        );
    }
);

//Custom constraints should extend PHPUnit\Framework\Constraint\Constraint, and provide a matches() and toString() method, and optionally override the evaluate() method.
it(
    description: 'Asserts that the value matches a custom constraint',
    closure: function () {

        $url = 'https://www.example.com/';

        expect(
            value: $url
        )->toMatchConstraint(
            constraint: new Tests\IsValidUrlConstraint()
        );
    }
);

//and($value)
it(
    description: 'Asserts that Pest can chain multiple expectations in a single test',
    closure: function () {

        $id = 14;
        $name = 'Nuno';

        expect(
            value: $id
        )->toBe(
            expected: 14
        )->and(
            value: $name
        )->toBe(
            expected: 'Nuno'
        );
    }
);

//json()
it(
    description: 'Pass a JSON string to the json method to assert it is a valid JSON and chain other expectations',
    closure: function () {

        /** @noinspection PhpUndefinedFieldInspection */
        expect(
            value: '{"name":"Nuno","credit":1000.00}'
        )
            ->json()
            ->toHaveCount(
                count: 2
            )
            ->name->toBe(
                expected: 'Nuno'
            )
            ->credit->toBeFloat();
    }
);

// Laravel only
//dd()
//Use the dd method to dumps the current expectation value and ends the script:
//
//expect(14)->dd(); // 14
//
//expect([1, 2])->sequence(
//    fn ($number) => $number->toBe(1),
//    fn ($number) => $number->dd(), // 2
//);

//each()
it(
    description: 'uses the each modifier to create an expectation on each item of the given iterable',
    closure: function () {

        $array = [1, 2, 3];
        expect(
            value: $array
        )->each->toBeInt();

        expect(
            value: $array
        )->each->not->toBeString();

        expect(
            value: $array
        )->each(
            callback: fn($number) => $number->toBeLessThan(4)
        );
    }
);

//not()
//Use the not modifier before a check to invert it:
it(
    description: 'uses the not modifier before a check to invert it',
    closure: function () {

        $id = 1;
        expect(
            value: $id
        )->not->toBe(
            expected: 14
        );
    }
);


//sequence()
it(
    description: 'uses the sequence method to specify a sequential set of expectations for each item of the given iterable',
    closure: function () {

        $array = [1, 2, 3];
        expect(
            value: $array
        )->sequence(
            fn($number) => $number->toBe(1),
            fn($number) => $number->toBe(2),
            fn($number) => $number->toBe(3),
        );
    }
);

//Use :
//You can also use the sequence method with associative iterables. Each closure receives the value as an expectation for the first argument, and the key as an expectation for the second argument:
it(
    description: 'uses the sequence method with associative iterables',
    closure: function () {

        $array = [
            'say' => 'hello',
            'foo' => 'bar',
            'John' => 'Jones'
        ];
        expect(
            value: $array
        )->sequence(
            fn($value, $key) => $value->toEqual('hello'),
            fn($value, $key) => $key->toEqual('foo'),
            fn($value, $key) => $value->toBeString(),
        );

        //    If you just want to check that each value in the iterable is equal to another value, you can pass the expected value directly instead of using a closure:
        expect(
            value: ['foo', 'bar', 'baz']
        )->sequence('foo', 'bar', 'baz');
    }
);
