<?php

namespace PlacementBundle\Entity;

/**
 * Students
 */
class Students
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var
     */
    private $name;

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
    public function getName()
    {
        return $this->name;
    }
}
