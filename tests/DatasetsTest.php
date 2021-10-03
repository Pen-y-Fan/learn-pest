<?php
declare(strict_types=1);

// See https://pestphp.com/docs/datasets
it(
    description: 'has can add with array dataset',
    closure: function ($num1, $num2, $total) {
        expect(
            value: $num1
        )->toBeInt();

        $this->assertIsInt(
            actual: $num1
        );

        expect(
            value: $num2
        )->toBeInt();

        expect(
            value: $total
        )->toBeInt();

        expect(
            value: add($num1, $num2)
        )->ToEqual(
            expected: $total
        );
    })->with([
    [1, 1, 2],
    [1, 2, 3],
]);

// ✓ it has can add with array dataset with (1, 1, 2)
// ✓ it has can add with array dataset with (1, 2, 3)


it(
    description: 'has can add with named dataset',
    closure: function ($num1, $num2, $total) {
        expect(
            value: $total
        )->toBeInt();

        expect(
            value: add($num1, $num2)
        )->ToEqual(
            expected: $total
        );
    })->with([
    'add 1 plus 1' => [1, 1, 2],
    'add 1 plus 2' => [1, 2, 3],
]);

it(
    description: 'has can add with yield dataset',
    closure: function ($num1, $num2, $total) {
        expect(
            value: $total
        )->toBeInt();

        expect(
            value: add($num1, $num2)
        )->ToEqual(
            expected: $total
        );
    })->with(function () {
    yield 'add 1 plus 1' => [1, 1, 2];
    yield 'add 1 plus 2' => [1, 2, 3];
});

// Output:
// ✓ it has emails with data set "add 1 plus 1"
// ✓ it has emails with data set "add 1 plus 2"

// Most of the examples require Laravel, re-visit with a Laravel project installed.

function add($num1, $num2)
{
    return $num1 + $num2;
}
