<?php

namespace Naif\NovaLoginMonitor;

use Laravel\Nova\Card;

class NovaLoginMonitor extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-login-monitor';
    }

    public function power($power = 'On')
    {
        $this->withMeta([
            'power' => $power
        ]);
        return $this;
    }

}
