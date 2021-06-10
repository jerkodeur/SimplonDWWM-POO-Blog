<?php

class PostController extends ViewController
{
    private string $_prefix = 'post';
    private PostEntity $_entity;

    public function __construct()
    {
        require Routing::getPathByParent('Model/' . UcFirst($this->_prefix) . 'Entity.php');
        $this->_entity = new PostEntity();
    }

    public function home()
    {
        $var = $this->_prefix . 's';
        $$var = $this->_entity->findAll();
        return $this->render($this->_prefix . '/home', compact($var));
    }

    public function show(int $id)
    {
        $var = $this->_prefix;
        $$var = $this->_entity->findOneById($id);
        return $this->render($this->_prefix . '/show', compact($var));
    }
}
