<?php

namespace App\Traits\Livewire;

use Exception;

trait IsActiveProperty
{
    public function getIsActiveProperty()
    {
        $navItems = array_map(
            function ($n) {
                return $n . "*";
            },
            array_keys($this->navItems ?? [])
        );

        try {
            return request()->is($navItems) ? 'active' : '';
        } catch (Exception $e) {
            return '';
        }
    }
}
