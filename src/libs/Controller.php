<?php

namespace Leandro\mvc\libs;

class Controller
{
    public $data;

    public function __construct()
    {
    }

    public function render($vista, $data = "")
    {
        $this->data = $data;
        require "src/views/" . $vista . ".php";
        # code...
    }
}
