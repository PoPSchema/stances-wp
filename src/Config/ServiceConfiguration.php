<?php

declare(strict_types=1);

namespace PoP\StancesWP\Config;

use PoP\Root\Component\PHPServiceConfigurationTrait;
use PoP\ComponentModel\Container\ContainerBuilderUtils;

class ServiceConfiguration
{
    use PHPServiceConfigurationTrait;

    protected static function configure(): void
    {
        ContainerBuilderUtils::injectValuesIntoService(
            'instance_manager',
            'overrideClass',
            \PoP\Stances\TypeResolverPickers\Optional\StanceContentEntityTypeResolverPicker::class,
            \PoP\StancesWP\TypeResolverPickers\Overrides\StanceContentEntityTypeResolverPicker::class
        );
    }
}
