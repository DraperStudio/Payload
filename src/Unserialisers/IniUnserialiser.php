<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Unserialisers;

use BrianFaust\Payload\Contracts\Unserialiser;
use BrianFaust\Payload\Utils\Mapper;

class IniUnserialiser implements Unserialiser
{
    public function unserialise($input, ? string $class) : array
    {
        $contents = json_decode(json_encode(parse_ini_string($input, true)));

        if (!is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return (array) $contents;
    }
}
