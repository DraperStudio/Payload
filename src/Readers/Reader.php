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

namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Utils\File;
use BrianFaust\Payload\Exceptions\InvalidFileTypeException;

abstract class Reader
{
    protected $extensions = [];

    abstract public function read($path, ?string $class = null): array;

    public function check($path): bool
    {
        $extension = File::extension($path);

        if (! in_array($extension, $this->extensions)) {
            throw new InvalidFileTypeException(
                sprintf('%s is an invalid file type for the %s class', $extension, get_class($this)));
        }

        return true;
    }

    public function contents($path): ?string
    {
        if ($this->check($path)) {
            return File::contents($path);
        }
    }

    public function get($path): ?array
    {
        if ($this->check($path)) {
            return File::get($path);
        }
    }
}
