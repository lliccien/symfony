<?php

namespace AppBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Doctrine\DataFixtures\AbstractLoader;
use Nelmio\Alice\Fixtures;

class DataLoader extends AbstractLoader
{
    /**
     * @return array
     */
    public function getFixtures()
    {
        return array(
                '@AppBundle/DataFixtures/ORM/examples.yml',
        );
    }
}