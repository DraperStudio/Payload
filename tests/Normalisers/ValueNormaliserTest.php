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

namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\ValueNormaliser;

class ValueNormaliserTest extends TestCase
{
    protected function getNormaliser(): ValueNormaliser
    {
        return new ValueNormaliser();
    }
}
