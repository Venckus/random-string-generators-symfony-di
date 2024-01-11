<?php

namespace App\Project\Service\String\Converter;

use App\Project\Service\String\Converter\ConverterInterface;


class CharacterToIndexIntConverter implements ConverterInterface
{
    public function convert(string $string): string
    {
        $map = range('a', 'z');
        $string = strtolower($string);

        foreach($map as $i => $char) {
            $stringNumber = $i + 1;
            $string = str_replace($char, "/{$stringNumber}", $string);
        }

        return $string;
    }
}