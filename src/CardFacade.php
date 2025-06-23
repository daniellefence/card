<?php

namespace Daniellefence\Card;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Daniellefence\Card\Skeleton\SkeletonClass
 */
class CardFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'card';
    }
}
