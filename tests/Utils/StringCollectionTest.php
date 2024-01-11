<?php

namespace App\Tests\Utils;

use App\Utils\StringsCollection;
use PHPUnit\Framework\TestCase;

class StringCollectionTest extends TestCase
{
    public function testAddsItemsToStack(): void
    {
        $stringCollection = new StringsCollection();
        $stringCollection->add('test');

        $this->assertEquals(['test'], $stringCollection->getAll());
    }

    public function testAddsArrayOfStringsToStack(): void
    {
        $stringCollection = new StringsCollection(['test']);
        $stringCollection->add(['test1', 'test2']);

        $this->assertEquals(['test', 'test1', 'test2'], $stringCollection->getAll());
    }
}