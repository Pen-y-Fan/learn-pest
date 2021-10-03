<?php
declare(strict_types=1);

// See https://pestphp.com/docs/setup-and-teardown

beforeEach(
    closure: function () {
    $this->hey = 'artisan';
});

test(
    description: 'hey always starts off as artisan',
    closure: function () {
    expect(
        value: $this->hey
    )->ToBe(
        expected: 'artisan'
    );
});

test(
    description: 'hey can be change from artisan',
    closure: function () {
    expect(
        value: $this->hey
    )->ToBe(
        expected: 'artisan'
    );

    $this->hey = 'not artisan';

    expect(
        value: $this->hey
    )->not()->ToBe(
        expected: 'artisan'
    )->ToBe(
        expected: 'not artisan'
    );
});

// Technically if tests are run in parallel this makes no difference!
test(
    description: 'hey will reset to artisan after another test',
    closure: function () {
    expect(
        value: $this->hey
    )->ToBe(
        expected: 'artisan'
    );
});

// Most of the examples require Laravel, re-visit with a Laravel project installed.
