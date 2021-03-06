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

namespace BrianFaust\Payload\Writers;

use BrianFaust\Payload\Serialisers\ValueSerialiser;

class ValueWriter extends Writer
{
    public function write($path, $input): bool
    {
        return $this->put($path, (new ValueSerialiser())->serialise($input));
    }
}
