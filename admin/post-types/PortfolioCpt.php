<?php

class PortfolioCpt
{
    private $singular_name;
    private $plural_name;

    function __construct($singular_name, $plural_name)
    {
        $this->singular_name = $singular_name;
        $this->plural_name = $plural_name;
        add_action('init', array($this, 'create_portfolio_cpt'));
    }

    function create_portfolio_cpt()
    {
        $labels = array(
            'name' => ucfirst($this->plural_name),
            'singular_name' => $this->singular_name
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => $this->singular_name),
            'menu_icon' => 'dashicons-text-page ',
            'show_in_rest' => true,
            'supports' => array('thumbnail', 'editor', 'title'),
        );

        register_post_type('rl_' . $this->singular_name, $args);
    }
}

