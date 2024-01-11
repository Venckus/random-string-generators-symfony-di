<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Project\Bootstrap;
use App\Project\Service\String\Converter\Rot13Converter;
use App\Project\Service\String\Converter\CharacterToIndexIntConverter;
use App\Project\Service\String\Generator\RandomStringGenerator;
use App\Utils\ConvertersCollection;
use App\Utils\StringsCollection;

$bootstrap = new Bootstrap();
$container = $bootstrap->getContainer();

$stringCollection = new StringsCollection();

/**
 * @var RandomStringGenerator $generator
 */
$generator = $container->get('RandomStringGenerator');

$convertersCollection = new ConvertersCollection();
$convertersCollection->add(new CharacterToIndexIntConverter());
$convertersCollection->add(new Rot13Converter());

for ($i = 0; $i < 10; $i++) {
    $generatorMethod = $generator->getRandomMethodString();
    $randomGenerated = $generator->{$generatorMethod}();
    $stringCollection->add($randomGenerated);

    foreach ($stringCollection->getAll() as $string) {
        $converted = $convertersCollection->getRandomElement()->convert($string);

        print("{$string} converted to {$converted}\n");
    }
    $stringCollection->reset();
}