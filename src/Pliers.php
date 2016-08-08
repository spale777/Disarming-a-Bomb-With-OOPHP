<?php

namespace Acme;

class Pliers extends ToolboxCheck
{
    public function check(Toolbox $toolbox)
    {
        if( ! $toolbox->pliers) {
            throw new \Exception('There are no pliers in your toolbox.');
        }

        var_dump('Pliers check : OK');

        if($this->successor){
            $this->next($toolbox);
        }
    }
}