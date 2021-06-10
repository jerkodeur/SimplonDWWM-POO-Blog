<?php

class ViewController extends Controller
{
    private string $_path = '/View/';

    public function render($view, array $datas = []): self
    {
        extract($datas);
        ob_start();
        require Routing::getPathByParent($this->_path . $view . '.php');
        $content = ob_get_clean();

        require Routing::getPathByParent($this->_path . 'base.php');

        return $this;
    }
}
