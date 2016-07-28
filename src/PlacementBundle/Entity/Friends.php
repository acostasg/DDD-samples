<?php

namespace PlacementBundle\Entity;

/**
 * Friends
 */
class Friends
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $friend_id;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFriend_id()
    {
        return $this->friend_id;
    }
}
