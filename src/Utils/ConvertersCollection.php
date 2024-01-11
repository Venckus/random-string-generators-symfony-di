<?php

namespace App\Utils;

use App\Project\Service\String\Converter\ConverterInterface;


class ConvertersCollection
{
    /**
     * @param ConverterInterface[] $items
     */
    public function __construct(
        private array $items = []
    ) {
    }

    public function add(ConverterInterface $item): void
    {
        $this->items[] = $item;
    }

    public function getRandomElement(): ConverterInterface
    {
        $randomIndex = rand(0, count($this->items) - 1);

        return $this->items[$randomIndex];
    }
}