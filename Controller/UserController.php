<?php

class UserController extends ViewController
{
    private string $_prefix = 'user';

    public function home()
    {
        return $this->render($this->_prefix . '/connexionForm');
    }
}
