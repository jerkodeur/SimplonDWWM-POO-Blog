<?php

class ErrorController extends ViewController
{
    private string $_prefix = 'error';

    public function show(Exception $e)
    {
        return $this->render($this->_prefix . '/error404');
    }
}
