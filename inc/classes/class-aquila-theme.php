<?php

/**
 * 
 * Bootstraps the Theme
 * 
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME
{
    use Singleton;

    protected function __construct()
    {
        wp_die('Hello World');
    }
    protected function set_hooks()
    {
        //
    }
}
