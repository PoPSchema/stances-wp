<?php
namespace PoP\StancesWP\TypeAPIs;

use function get_post;
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

    /**
     * Get the stance with provided ID or, if it doesn't exist, null
     *
     * @param [type] $id
     * @return void
     */
    public function getStance($id)
    {
        $post = get_post($id);
        if (!$post || $post->post_type != \POP_USERSTANCE_POSTTYPE_USERSTANCE) {
            return null;
        }
        return $post;
    }

    /**
     * Indicate if an stance with provided ID exists
     *
     * @param [type] $id
     * @return void
     */
    public function stanceExists($id): bool
    {
        return $this->getStance($id) != null;
    }
}
