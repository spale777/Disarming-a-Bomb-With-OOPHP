<?php

namespace Acme;

class WireCutters extends ToolboxCheck
{
    public function check(Toolbox $toolbox)
    {
        if( ! $toolbox->wireCutters) {
            throw new \Exception('There are no Wire Cutters in your toolbox.');
        }

        var_dump('WireCutters check : OK');

        if($this->successor){
            $this->next($toolbox);
        }
    }
}