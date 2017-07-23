<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\JsonSerialiser;

class JsonSerialiserTest extends TestCase
{
    protected function getExpectedOutput(): string
    {
        return '{"hello":"world"}';
    }

    protected function getSerialiser(): JsonSerialiser
    {
        return new JsonSerialiser();
    }
}
