<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\YamlInlineWriter;

class YamlInlineWriterTest extends AbstractTestCase
{
    protected function getExpectedOutput(): string
    {
        return 'hello: world';
    }

    protected function getWriter(): YamlInlineWriter
    {
        return new YamlInlineWriter();
    }
}
