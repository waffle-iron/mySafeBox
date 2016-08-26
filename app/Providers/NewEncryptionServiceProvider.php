<?php

namespace mySafebox\Providers;

use RuntimeException;
use Illuminate\Support\Str;
use Illuminate\Support\ServiceProvider;

use mySafebox\NewEncrypter\NewEncrypter;

class NewEncryptionServiceProvider extends ServiceProvider
{
    /**
     * @see /app/NewEncrypter/NewEncrypter.php
     * @see /vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php
     */

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('newencrypter', function ($app) {
            $config = $app->make('config')->get('app');

            if (Str::startsWith($key = $config['key'], 'base64:')) {
                $key = base64_decode(substr($key, 7));
            }

            return $this->getEncrypterForKeyAndCipher($key, $config['cipher']);
        });
    }

    /**
     * Get the proper encrypter instance for the given key and cipher.
     *
     * @param  string  $key
     * @param  string  $cipher
     * @return mixed
     *
     * @throws \RuntimeException
     */
    protected function getEncrypterForKeyAndCipher($key, $cipher)
    {
        if (NewEncrypter::supported($key, $cipher)) {
            return new NewEncrypter($key, $cipher);
        } else {
            throw new RuntimeException('No supported encrypter found. The cipher and / or key length are invalid.');
        }
    }
}
