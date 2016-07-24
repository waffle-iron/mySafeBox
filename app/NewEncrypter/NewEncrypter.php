<?php

namespace mySafebox\NewEncrypter;

use Illuminate\Encryption\Encrypter;

/**
 * @see \Illuminate\Encryption\Encrypter
 */

class NewEncrypter extends Encrypter {

    public function setKey( $key ) {
        $this->key = (string) $key;
    }

}
