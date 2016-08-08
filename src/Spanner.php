<?php

namespace Acme;

class Spanner extends ToolboxCheck
{
    public function check(Toolbox $toolbox)
    {
        if( ! $toolbox->spanner) {
            throw new \Exception('There is no spanner in your toolbox.');
        }

        var_dump('Spanner check : OK');

        if($this->successor){
            $this->next($toolbox);
        }
    }
}