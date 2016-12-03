<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\ValueUnserialiser;

class ValueReader extends Reader
{
    protected $extensions = ['ser'];

    public function read($path, ? string $class) : array
    {
        return (new ValueUnserialiser())->unserialise($this->contents($path), $class);
    }
}
