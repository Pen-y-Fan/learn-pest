<?php
declare(strict_types=1);

test('asserts true is true', function () {
    $this->assertTrue(true);

    expect(true)->toBeTrue();
});

// Note: Notice how, when using the it function, your test name gets prepended with 'it' in the returned description.
it('asserts true is true', function () {
    $this->assertTrue(true);

    expect(true)->toBeTrue();
});