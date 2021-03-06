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

namespace BrianFaust\Payload\Serialisers;

use BrianFaust\Payload\Contracts\Serialiser;
use League\Csv\Writer;

class CsvSerialiser implements Serialiser
{
    public function serialise($input): string
    {
        $writer = Writer::createFromString('');

        if (is_array(reset($input))) {
            $writer->insertOne(array_keys(reset($input)));
        } else {
            $writer->insertOne(array_keys($input));
        }

        if (is_array(reset($input))) {
            $writer->insertAll($input);
        } else {
            $writer->insertOne($input);
        }

        return $writer->__toString();
    }
}
