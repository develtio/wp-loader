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
     * @param LoaderInterface $loader
     */
    public function add(LoaderInterface $loader): void
    {
        $this->loaders[] = $loader;
    }
}
