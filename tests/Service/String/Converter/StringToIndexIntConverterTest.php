<?php

namespace App\Tests\Service\String\Converter;

use App\Project\Service\String\Converter\CharacterToIndexIntConverter;
use PHPUnit\Framework\TestCase;


class StringToIndexIntConverterTest extends TestCase
{
    /**
     * @dataProvider provideStrings
     */
    public function testConvert(string $inputString, string $expectedString): void
    {
        $Converter = new CharacterToIndexIntConverter();
        $convertedString = $Converter->convert($inputString);

        $this->assertEquals($expectedString, $convertedString);
    }

    /**
     * @return array<array<string,string>>
     */
    public static function provideStrings(): array
    {
        return [
            ['abcd', '/1/2/3/4'],
            ['NOPQ', '/14/15/16/17'],
            ['9abcd', '9/1/2/3/4'],
            ['987nopq', '987/14/15/16/17'],
        ];
    }
}