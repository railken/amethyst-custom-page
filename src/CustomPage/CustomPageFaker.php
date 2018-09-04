<?php

namespace Railken\LaraOre\CustomPage;

use Faker\Factory;
use Railken\Bag;
use Railken\Laravel\Manager\BaseFaker;

class CustomPageFaker extends BaseFaker
{
    /**
     * @var string
     */
    protected $manager = CustomPageManager::class;

    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('html', 'Welcome <p>test</p>');

        return $bag;
    }
}
