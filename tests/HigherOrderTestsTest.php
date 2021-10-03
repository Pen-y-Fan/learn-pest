<?php
declare(strict_types=1);

// See https://pestphp.com/docs/higher-order-tests

test(
    description: 'most basic example - true is true'
)->assertTrue(
    condition: true
);

// Most of the examples require Laravel, re-visit with a Laravel project installed.
