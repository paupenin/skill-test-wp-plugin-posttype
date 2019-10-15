<?php

namespace PauPenin\WPSkillTest\PostTypes;

use PauPenin\WPSkillTest\PostType;

/**
 * Class PostType
 */
class Laptop extends PostType
{
    /**
     * PostType identifiers
     */
    protected $name = 'laptop';
    protected $plural_name = 'laptops';

    /**
     * Get custom arguments for PostType
     *
     * @param array $override
     * @return array
     */
    protected function args($override = [])
    {
        return parent::args(
            array_merge([
                'label' => 'Laptop',
                'menu_icon' => 'dashicons-laptop'
            ], $override)
        );
    }
}
