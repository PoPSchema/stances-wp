<?php

declare(strict_types=1);

namespace PoP\StancesWP\TypeResolverPickers\Overrides;

use PoP\ContentWP\TypeResolverPickers\ContentEntityTypeResolverPickerInterface;
use PoP\PostsWP\TypeResolverPickers\NoCastContentEntityTypeResolverPickerTrait;

class StanceContentEntityTypeResolverPicker extends \PoP\Stances\TypeResolverPickers\Optional\StanceContentEntityTypeResolverPicker implements ContentEntityTypeResolverPickerInterface
{
    use NoCastContentEntityTypeResolverPickerTrait;

    public function getPostType(): string
    {
        return \POP_USERSTANCE_POSTTYPE_USERSTANCE;
    }
}
