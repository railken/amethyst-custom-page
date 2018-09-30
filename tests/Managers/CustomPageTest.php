<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\CustomPageFaker;
use Railken\Amethyst\Managers\CustomPageManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class CustomPageTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = CustomPageManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = CustomPageFaker::class;
}
