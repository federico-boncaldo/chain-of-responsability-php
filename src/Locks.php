<?php

namespace App;

class Locks extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (! $home->locked) {
            throw new \Exception('The doors are not locked!! Abort abort.');
        }

        $this->next($home);
    }
}
