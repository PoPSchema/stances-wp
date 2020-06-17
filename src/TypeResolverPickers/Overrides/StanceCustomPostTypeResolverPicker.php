<?php

declare(strict_types=1);

namespace PoP\StancesWP\TypeResolverPickers\Overrides;

use PoP\CustomPostsWP\TypeResolverPickers\CustomPostTypeResolverPickerInterface;
use PoP\CustomPostsWP\TypeResolverPickers\NoCastCustomPostTypeResolverPickerTrait;

class StanceCustomPostTypeResolverPicker extends \PoP\Stances\TypeResolverPickers\Optional\StanceCustomPostTypeResolverPicker implements CustomPostTypeResolverPickerInterface
{
    use NoCastCustomPostTypeResolverPickerTrait;

    public function getCustomPostType(): string
    {
        return \POP_USERSTANCE_POSTTYPE_USERSTANCE;
    }
}
