<?php
namespace Acme;

class BombSpecialist
{
    protected $spanner;
    protected $screwdriver;
    protected $pliers;
    protected $flashLight;
    protected $wireCutters;
    protected $toolbox;

    public function __construct(Spanner $spanner,
                                Screwdriver $screwdriver,
                                Pliers $pliers,
                                Flashlight $flashlight,
                                WireCutters $wireCutters,
                                Toolbox $toolbox)
    {
        $this->spanner = $spanner;
        $this->screwdriver = $screwdriver;
        $this->pliers = $pliers;
        $this->flashLight = $flashlight;
        $this->wireCutters = $wireCutters;
        $this->toolbox = $toolbox;
    }

    public function checkIfReady()
    {
        $this->spanner->succeedWith($this->screwdriver);
        $this->screwdriver->succeedWith($this->pliers);
        $this->pliers->succeedWith($this->flashLight);
        $this->flashLight->succeedWith($this->wireCutters);
        $this->spanner->check($this->toolbox);
    }

    public function getToWork()
    {
        var_dump('All good going to work.');
    }
}


