<?php

use App\Project\Service\String\Converter\Rot13Converter;
use App\Tests\TestCase;

class Rot13ConverterTest extends TestCase
{
    /**
     * @dataProvider provideStrings
     */
    public function testConvert(string $inputString, string $expectedString): void
    {
        $Converter = new Rot13Converter();
        $convertedString = $Converter->convert($inputString);

        $this->assertEquals($expectedString, $convertedString);
    }

    /**
     * @return array<array<string,string>>
     */
    public static function provideStrings(): array
    {
        return [
            ['abcd', 'nopq'],
            ['NOPQ', 'ABCD'],
            ['test', 'grfg'],
            ['Test', 'Grfg'],
            ['tEsT', 'gRfG'],
        ];
    }
}