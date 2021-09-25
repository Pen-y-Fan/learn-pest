<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Constraint\Constraint;

class IsValidUrlConstraint extends Constraint
{
    // source: https://solvit.io/54dc159
    public const PATTERN = '_^(?:(?:https?|ftp)://)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\x{00a1}-\x{ffff}0-9]-*)*[a-z\x{00a1}-\x{ffff}0-9]+)(?:\.(?:[a-z\x{00a1}-\x{ffff}0-9]-*)*[a-z\x{00a1}-\x{ffff}0-9]+)*(?:\.(?:[a-z\x{00a1}-\x{ffff}]{2,}))\.?)(?::\d{2,5})?(?:[/?#]\S*)?$_iuS';

    public function toString(): string
    {
        return 'is a valid url';
    }

    protected function matches($other): bool
    {
        if (!is_string($other)) {
            return false;
        }

        return preg_match(
                pattern: self::PATTERN,
                subject: $other
            ) > 0;
    }
}
