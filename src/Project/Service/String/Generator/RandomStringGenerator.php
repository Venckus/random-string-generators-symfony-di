<?php

namespace App\Project\Service\String\Generator;

class RandomStringGenerator
{
    public function __construct(
        protected int $length = 16,
        protected int $count = 2
    ) {
    }

    public function generateString(): string
    {
        $randomString = substr(
            str_shuffle(
                str_repeat(
                    $x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                    ceil($this->length / strlen($x))
                )
            ),
            1,
            $this->length
        );

        return $randomString;
    }

    /**
     * @return string[]
     */
    public function generateArray(): array
    {
        $array = [];
        for ($i = 0; $i < $this->count; $i++) {
            $array[] = $this->generateString();
        }
        return $array;
    }

    public function getRandomMethodString(): string
    {
        $methods = ['generateString', 'generateArray'];
        $randomIndex = rand(0, 1);

        return $methods[$randomIndex];
    }
}
