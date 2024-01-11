<?php

namespace App\Tests;

use App\Project\Bootstrap;
use Symfony\Component\DependencyInjection\Container;
use PHPUnit\Framework\TestCase as BaseTestCase;


class TestCase extends BaseTestCase
{
    protected Container $container;

    protected function setUp(): void
    {
        $bootstrap = new Bootstrap();
        $this->container = $bootstrap->getContainer();
    }
}
