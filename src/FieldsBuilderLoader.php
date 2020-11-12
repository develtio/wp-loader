<?php

namespace Develtio\WP\Loader;

use StoutLogic\AcfBuilder\FieldsBuilder;

class FieldsBuilderLoader extends AbstractLoader
{
    public function run(): void
    {
        add_action(
            'acf/init',
            function () {
                $this->loadFiles(
                    $this->pattern,
                    function ($file) {
                        $field = require_once $file;

                        if ($field instanceof FieldsBuilder) {
                            acf_add_local_field_group($field->build());
                        }
                    }
                );
            }
        );
    }
}
