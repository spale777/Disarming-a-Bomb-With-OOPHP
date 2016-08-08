<?php

namespace Acme;

class Flashlight extends ToolboxCheck
{
    public function check(Toolbox $toolbox)
    {
        if( ! $toolbox->flashLight) {
            throw new \Exception('There is no flashlight in your toolbox.');
        }

        var_dump('Flashlight check : OK');

        if($this->successor){
            $this->next($toolbox);
        }
    }
}