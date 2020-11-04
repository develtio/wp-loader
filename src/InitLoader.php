<?php

namespace Develtio\WP\Loader;

class InitLoader extends AbstractLoader
{
    public function run(): void
    {
        add_action('init', function () {
            $this->loadFiles($this->pattern, function ($file) {
                include_once $file;
            });
        });
    }
}
