<?php

namespace Acme;

class Screwdriver extends ToolboxCheck
{
    public function check(Toolbox $toolbox)
    {
        if( ! $toolbox->spanner) {
            throw new \Exception('There is no screwdriver in your toolbox.');
        }

        var_dump('Screwdriver check : OK');

        if($this->successor){
            $this->next($toolbox);
        }
    }
}