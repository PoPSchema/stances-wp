<?php
namespace PoP\StancesWP\TypeAPIs;

use WP_Post;
use PoP\Stances\TypeAPIs\StanceTypeAPIInterface;
/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
class StanceTypeAPI implements StanceTypeAPIInterface
{
    /**
     * Indicates if the passed object is of type Stance
     *
     * @param [type] $object
     * @return boolean
     */
    public function isInstanceOfStanceType($object): bool
    {
        return ($object instanceof WP_Post) && $object->post_type == \POP_USERSTANCE_POSTTYPE_USERSTANCE;
    }
}
