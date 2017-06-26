<?php

namespace Cloud\Slim\View;

class Plates {

    private $engine;

    public function __construct($directory) {
        if (!$this->engine) {
            // Create new Plates instance
            $this->engine = new \League\Plates\Engine($directory);
        }
        return $this->engine;
    }

    public function __call($method_name, $arguments) {
        if (method_exists($this->engine, $method_name)) {
            return call_user_func_array(array($this->engine, $method_name), $arguments);
        }
    }

}
