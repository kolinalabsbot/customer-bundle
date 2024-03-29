<?php
/**
 * Created by PhpStorm.
 * User: Claudinei
 * Date: 03/07/2016
 * Time: 23:38
 */

namespace Kolina\CustomerBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

abstract class BaseTest extends WebTestCase
{
    /**
     * @return \Symfony\Bundle\FrameworkBundle\Client
     */
    protected function getClient()
    {
        return static::createClient();
    }

    /**
     * @return null|\Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected function getContainer()
    {
        return $this->getClient()->getContainer();
    }

    /**
     * @param $id
     * @return object
     */
    protected function getService($id)
    {
        return $this->getContainer()->get($id);
    }
}