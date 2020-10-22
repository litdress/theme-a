<?php

namespace ThemeA;

use Illuminate\Support\ServiceProvider;
use Theme\Theme;
use ThemeA\Repeatables\TextRepeatable;

class ThemeAServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->callAfterResolving('theme', function (Theme $theme) {
            $theme->repeatable('litdress/theme-a', TextRepeatable::class);
        });
    }
}
