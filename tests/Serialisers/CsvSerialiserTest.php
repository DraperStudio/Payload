<?php

declare(strict_types=1);

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\CsvSerialiser;

class CsvSerialiserTest extends TestCase
{
    protected function getExpectedOutput(): string
    {
        return 'hello
world
';
    }

    protected function getSerialiser(): CsvSerialiser
    {
        return new CsvSerialiser();
    }
}
