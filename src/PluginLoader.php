<?php

namespace PauPenin\WPSkillTest;

use PauPenin\WPSkillTest\PostTypes\Laptop;

class PluginLoader
{
    /**
     * PostTypes Classes to load
     */
    protected $post_types_classes = [
		Laptop::class,
	];

    /**
     * PostTypes list
     */
    protected $post_types = [];

    /**
     * SetUp Actions
     */
    public function __construct()
    {
        Log::info("Plugin started");

        $this->instantiateClasses();
        
        add_action('init', [&$this, 'init']);
    }

    /**
     * Instantiate PostType Classes
     */
    protected function instantiateClasses()
    {
        foreach ($this->post_types_classes as $class) {
            $this->post_types[] = new $class();
        }
    }
  
    /**
     * Init Actions for whole website
     */
    public function init()
    {
        Log::info("Registering PostTypes");

        foreach ($this->post_types as $type) {
            $type->register();
        }
    }
}
