<?php

namespace App;

class Lights extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (! $home->lightsOff) {
            throw new \Exception('The lights are still on!! Abort abort.');
        }

        $this->next($home);
    }
}
