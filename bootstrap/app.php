<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new Illuminate\Foundation\Application(
    realpath(__DIR__.'/../')
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|

我们需要绑定一些重要的接口到容器中，这样就可以在需要的时候能够用到他们, 框架的核心 会把进来的 web 或 CLI 的请求分发到 APP 中

*/

/**
 * 在 容器中注册绑定
 *
 * 这么做相当于告诉容器：当一个类需要实现 Illuminate\Contracts\Http\Kernel 时，应该注入 App\Http\Kernel。
 * 现在我们就可以在构造函数或者任何其他通过服务容器注入依赖项的地方使用类型提示注入 Illuminate\Contracts\Http\Kernel 接口：
 */
$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|

这个脚本返回 APP 的实例

该脚本返回应用程序实例。 实例被赋予调用脚本，所以我们可以将实例的构建与应用程序的实际运行分开并发送响应。

*/

return $app;
