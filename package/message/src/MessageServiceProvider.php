<?php

namespace DevPackage\Message;

use Illuminate\Support\ServiceProvider;

class MessageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // 加载扩展包的路由文件
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}
