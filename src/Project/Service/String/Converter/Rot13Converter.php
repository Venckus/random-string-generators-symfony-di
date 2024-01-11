<?php

namespace App\Project\Service\String\Converter;

use App\Project\Service\String\Converter\ConverterInterface;


class Rot13Converter implements ConverterInterface
{
    public function convert(string $string): string
    {
        return str_rot13($string);
    }
}