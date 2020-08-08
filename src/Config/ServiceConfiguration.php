<?php

declare(strict_types=1);

namespace PoPSchema\StancesWP\Config;

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
            \PoPSchema\Stances\TypeResolverPickers\Optional\StanceCustomPostTypeResolverPicker::class,
            \PoPSchema\StancesWP\TypeResolverPickers\Overrides\StanceCustomPostTypeResolverPicker::class
        );
    }
}
