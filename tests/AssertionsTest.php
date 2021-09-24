<?php
declare(strict_types=1);

// https://pestphp.com/docs/assertions

it('asserts true is true', function () {
    $this->assertTrue(
        condition: true
    );

    expect(
        value: true
    )->toBeTrue();
});

it('asserts false is false', function () {
    $this->assertFalse(
        condition: false
    );

    expect(
        value: false
    )->toBeFalse();
});

it('asserts array to be an array', function () {
    $array = [1, 2, 3, 4];

    expect(
        value: $array
    )->toBeArray();
});

it('asserts count is four', function () {
    $array = [1, 2, 3, 4];

    $this->assertCount(
        expectedCount: 4,
        haystack: $array
    );
});

it('asserts array is equal', function () {
    $array = [1, 2, 3, 4];

    $this->assertEquals(
        expected: [1, 2, 3, 4],
        actual: $array
    );
});

it('asserts array is empty', function () {
    $array = [];

    $this->assertEmpty(
        actual: $array
    );
});

it('asserts string contains string', function () {
    $this->assertStringContainsString(
        needle: 'Star',
        haystack: 'Star Wars'
    );
});
