<?php

namespace Develtio\WP\Loader;

abstract class AbstractLoader implements Loader
{
    protected $pattern;

    public function __construct(string $pattern)
    {
        $this->pattern = $pattern;
    }

    protected function loadFiles(string $pattern, $cb): void
    {
        $files = glob($pattern, GLOB_BRACE);

        if ($files) {
            foreach ($files as $file) {
                $cb($file);
            }
        }
    }
}
