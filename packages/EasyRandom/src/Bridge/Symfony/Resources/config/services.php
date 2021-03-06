<?php

declare(strict_types=1);

use EonX\EasyRandom\Interfaces\RandomGeneratorInterface;
use EonX\EasyRandom\RandomGenerator;
use EonX\EasyRandom\UuidV4\RamseyUuidV4Generator;
use EonX\EasyRandom\UuidV4\SymfonyUidUuidV4Generator;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire()
        ->autoconfigure();

    $services->set(SymfonyUidUuidV4Generator::class);

    $services->set(RamseyUuidV4Generator::class);

    $services->alias('easy_random.symfony_uuid4', SymfonyUidUuidV4Generator::class);

    $services->alias('easy_random.ramsey_uuid4', RamseyUuidV4Generator::class);

    $services->set(RandomGeneratorInterface::class, RandomGenerator::class);
};
