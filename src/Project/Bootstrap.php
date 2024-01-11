<?php

namespace App\Project;

use App\Project\Service\String\Generator\RandomStringGenerator;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;


class Bootstrap
{
    private Container $container;

    public function __construct(
        private string $configDir = __DIR__ . '/../../config',
    ) {
        $this->registerServices();
    }

    private function registerServices(): void
    {
        $this->container = new ContainerBuilder();

        $loader = new YamlFileLoader($this->container, new FileLocator($this->configDir));
        $loader->load($this->configDir . '/services.yaml');

        $this->container->register('RandomStringGenerator', RandomStringGenerator::class)
            ->addArgument($this->container->getParameter('RandomStringGenerator.length'))
            ->addArgument($this->container->getParameter('RandomStringGenerator.count'));
    }

    public function getContainer(): Container
    {
        return $this->container;
    }
}