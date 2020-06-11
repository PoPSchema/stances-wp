<?php

declare(strict_types=1);

namespace PoP\StancesWP\TypeResolverPickers\Overrides;

use PoP\ContentWP\TypeResolverPickers\CustomPostTypeResolverPickerInterface;
use PoP\PostsWP\TypeResolverPickers\NoCastCustomPostTypeResolverPickerTrait;

class StanceCustomPostTypeResolverPicker extends \PoP\Stances\TypeResolverPickers\Optional\StanceCustomPostTypeResolverPicker implements CustomPostTypeResolverPickerInterface
{
    use NoCastCustomPostTypeResolverPickerTrait;

    public function getPostType(): string
    {
        return \POP_USERSTANCE_POSTTYPE_USERSTANCE;
    }
}
