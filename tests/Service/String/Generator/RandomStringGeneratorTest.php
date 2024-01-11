<?php

namespace App\Tests\Project\Service\String\Generator;

// use PHPUnit\Framework\TestCase;
use App\Tests\TestCase;
use App\Project\Service\String\Generator\RandomStringGenerator;

class RandomStringGeneratorTest extends TestCase
{
    private RandomStringGenerator $randomStringGenerator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->randomStringGenerator = $this->container->get('RandomStringGenerator');
    }

    public function testGenerateRandomStringLengthFromConfig(): void
    {
        $randomString = $this->randomStringGenerator->generateString();

        $this->assertEquals(16, strlen($randomString));
    }

    public function testGenerateRandomStringStack(): void
    {
        $randomStringStack = $this->randomStringGenerator->generateArray();

        $this->assertIsArray($randomStringStack);
        $this->assertCount(3, $randomStringStack);
        $this->assertEquals(16, strlen($randomStringStack[0]));
    }
}
