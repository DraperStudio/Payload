<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Tests\Payload\Normalisers;

use DraperStudio\Payload\Normalisers\CsvNormaliser;

/**
 * This is the csv normaliser test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class CsvNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser()
    {
        return new CsvNormaliser();
    }
}
