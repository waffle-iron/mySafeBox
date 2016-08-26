<?php

namespace mySafebox\Support\Facades;

use Illuminate\Support\Facades\Facade;

class NewEncrypterFacade extends Facade
{
    /**
     * @see \app\Encryption\Encrypter
     */

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'newencrypter';
    }
}
