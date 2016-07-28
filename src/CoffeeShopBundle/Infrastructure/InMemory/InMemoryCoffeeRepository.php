<?php

namespace CoffeeShopBundle\Infrastructure\Persistence\InMemory;

use CoffeeShopBundle\Domain\Coffee\Coffee;
use CoffeeShopBundle\Domain\Coffee\CoffeeRepository;
use CoffeeShopBundle\Entity\CaramelTopping;
use CoffeeShopBundle\Entity\CreamTopping;
use CoffeeShopBundle\Entity\EspressoCoffee;
use CoffeeShopBundle\Entity\GroundCinnamonTopping;
use CoffeeShopBundle\Entity\LatteCoffee;
use CoffeeShopBundle\Entity\WhiteMoccaCoffee;

class InMemoryCoffeeRepository implements CoffeeRepository
{

    private $rawData = [];

    public function __construct()
    {
        $this->rawData[] = new EspressoCoffee();
        $this->rawData[] = new LatteCoffee();
        $this->rawData[] = new WhiteMoccaCoffee();

        $this->rawData[] = new CaramelTopping(
            new EspressoCoffee()
        );
        $this->rawData[] = new CreamTopping(
            new LatteCoffee()
        );
        $this->rawData[] = new GroundCinnamonTopping(
            new WhiteMoccaCoffee()
        );
    }

    /**
     * @return Coffee[]
     */
    public function getAvailableCoffee()
    {
        return $this->rawData;
    }
}
