<?php

namespace Laracrypt\Hasher;

use Illuminate\Support\ServiceProvider;
use Laracrypt\Hasher\MD5Hasher;

class MD5HashProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('md5hash', function () {
            return new MD5Hasher();
        });// 其他地方 app('md5hash')就可以拿到MD5Hasher具体的实例
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
