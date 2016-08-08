<?php
namespace Acme;

abstract class ToolboxCheck
{
    protected $successor;

    public function succeedWith(ToolboxCheck $successor)
    {
        $this->successor = $successor;
    }

    public function next(Toolbox $toolbox)
    {
        $this->successor->check($toolbox);
    }
    
    abstract function check(Toolbox $toolbox);
}