<?php

namespace PauPenin\WPSkillTest;

/**
 * Class PostType
 */
abstract class PostType
{
    /**
     * PostType identifiers
     */
    protected $name = '';
    protected $plural_name = '';

    /**
     * Create PostType class
     */
    public function __construct()
    {
        // Default name
        if ($this->name == '') {
            $this->name = strtolower((new \ReflectionClass($this))->getShortName());
        }
        if ($this->plural_name == '') {
            $this->plural_name = $this->name . 's';
        }
    }

    /**
     * Register PostType for whole website
     */
    final public function register()
    {
        Log::debug("Register PostType", array('name' => $this->name, 'args' => $this->args()));

        // register_post_type($this->name, $this->args());
    }

    /**
     * Get custom arguments for PostType
     *
     * @param array $override
     * @return array
     */
    protected function args($override = [])
    {
        return array_merge([
			'label'               => ucfirst($this->name),
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => false,
			'show_in_admin_bar'   => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => null,
			'menu_icon'           => null,
			'can_export'          => true,
			'delete_with_user'    => false,
			'hierarchical'        => false,
			'has_archive'         => $this->plural_name,
			'query_var'           => $this->name,
		], $override);
    }
}
