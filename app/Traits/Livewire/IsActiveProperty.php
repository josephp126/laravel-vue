<?php

namespace App\Traits\Livewire;

use Exception;

trait IsActiveProperty
{
    public function getIsActiveProperty()
    {
        $navItems = array_map(
            function ($n) {
                return str_replace(url('/') . '/', '', $n) . "*";
            },
            array_keys($this->navItems ?? [])
        );

        try {
            if ($navItems[0] == '/*') {
                $navItems[0] = '/';
            }

            return request()->is($navItems) ? 'active' : '';
        } catch (Exception $e) {
            return '';
        }
    }
}
