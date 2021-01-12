<?php

namespace Roles\Exceptions;

use Illuminate\Support\Collection;
use InvalidArgumentException;

class GuardDoesNotMatch extends InvalidArgumentException
{
    public static function create(string $givenGuard, Collection $expectedGuards)
    {
        return new static("The given role should use guard `{$expectedGuards->implode(', ')}` instead of `{$givenGuard}`.");
    }
}
