<?php

namespace app\core;

/**
 * Class Application
 *
 * @author Thiago Clemente <thiago.clemente@gmail.com>
 * @package namespace app\core
 */
class Application
{
    public Router $router;
    public Request $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        $this->router->resolve();
    }
}