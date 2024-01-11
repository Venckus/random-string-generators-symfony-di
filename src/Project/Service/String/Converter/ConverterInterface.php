<?php

namespace App\Project\Service\String\Converter;

interface ConverterInterface
{
    public function convert(string $string): string;
}