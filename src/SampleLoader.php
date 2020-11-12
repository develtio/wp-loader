<?php

namespace Develtio\WP\Loader;

class SampleLoader extends AbstractLoader
{
    public function run(): void
    {
        $this->loadFiles(
            $this->pattern,
            function ($file) {
                include_once $file;
            }
        );
    }
}
