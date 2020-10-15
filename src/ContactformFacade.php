<?php

namespace Webriderz\Contactform;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Webriderz\Contactform\Skeleton\SkeletonClass
 */
class ContactformFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'contactform';
    }
}
