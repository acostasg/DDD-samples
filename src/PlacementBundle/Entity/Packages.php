<?php

namespace PlacementBundle\Entity;

class Packages
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var float
     */
    private $salary;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getSalary()
    {
        return $this->salary;
    }
}
