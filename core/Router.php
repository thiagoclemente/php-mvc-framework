<?php

namespace app\core;
/**
 * Class Router
 *
 * @author Thiago Clemente <thiago.clemente@gmail.com>
 * @package namespace app\core
 */
class Router
{
    public Request $request;
    protected array $routers = [];

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routers['get'][$path] = $callback;
    }

    public function resolve()
    {
        $this->request->getPath();
    }
}