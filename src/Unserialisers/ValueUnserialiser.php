<?php

declare(strict_types=1);

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Payload\Unserialisers;

use BrianFaust\Payload\Contracts\Unserialiser;
use BrianFaust\Payload\Utils\Mapper;

class ValueUnserialiser implements Unserialiser
{
    public function unserialise($input, ?string $class = null): array
    {
        $contents = unserialize($input);

        if (!is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return $contents;
    }
}
