<?php

class Controller
{
    private string $_path = '/Controller';

    /**
     * Get the value of _path
     */
    public function get_path(): string
    {
        return $this->_path;
    }

    /**
     * Set the value of _path
     *
     * @return  self
     */
    public function set_path(string $_path)
    {
        $this->_path = $_path;

        return $this;
    }
}
