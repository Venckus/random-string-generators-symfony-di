<?php

namespace App\Utils;


class StringsCollection
{
    /**
     * @param string[] $items
     */
    public function __construct(
        private array $items = []
    ) {
    }

    /**
     * @param string|string[] $item
     */
    public function add(string|array $item): void
    {
        if (is_array($item)) {
            $this->items = array_merge($this->items, $item);
        } else {
            $this->items[] = $item;
        }
    }

    /**
     * @return string[]
     */
    public function getAll(): array
    {
        return $this->items;
    }

    public function reset(): void
    {
        $this->items = [];
    }
}