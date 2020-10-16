<?php

namespace Develtio\WP\Loader;

final class GroupLoader
{
    private $loaders = [];

    public function run(): void
    {
        foreach ($this->loaders as $loader) {
            $loader->run();
        }
    }

    /**
     * @param Loader $loader
     */
    public function add(Loader $loader): void
    {
        $this->loaders[] = $loader;
    }
}
