<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class CustomPageFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('config', ['test' => 'test']);
        $bag->set('category', $faker->name);
        $bag->set('html', 'Welcome <p>test</p>');
        $bag->set('url', 'welcome');
        $bag->set('label', 'Welcome');
        $bag->set('description', $faker->text);

        return $bag;
    }
}
