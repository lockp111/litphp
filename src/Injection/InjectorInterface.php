<?php

namespace Lit\Air\Injection;

use Lit\Air\Factory;

interface InjectorInterface
{
    public function isTarget($obj);

    public function inject(Factory $factory, $obj, array $extra = []);
}