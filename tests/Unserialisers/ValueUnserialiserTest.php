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

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\ValueUnserialiser;

class ValueUnserialiserTest extends AbstractTestCase
{
    protected function getInput(): string
    {
        return 'a:1:{s:5:"hello";s:5:"world";}';
    }

    protected function getUnserialiser(): ValueUnserialiser
    {
        return new ValueUnserialiser();
    }
}
