<?php

namespace Railken\LaraOre\Tests\CustomPage;

use Railken\LaraOre\CustomPage\CustomPageFaker;
use Railken\LaraOre\CustomPage\CustomPageManager;
use Railken\LaraOre\Support\Testing\ManagerTestableTrait;

class ManagerTest extends BaseTest
{
    use ManagerTestableTrait;

    /**
     * Retrieve basic url.
     *
     * @return \Railken\Laravel\Manager\Contracts\ManagerContract
     */
    public function getManager()
    {
        return new CustomPageManager();
    }

    public function testSuccessCommon()
    {
        $this->commonTest($this->getManager(), CustomPageFaker::make()->parameters());
    }
}
