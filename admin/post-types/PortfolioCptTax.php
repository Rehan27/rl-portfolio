<?php


class PortfolioCptTax
{
    private $singular_name;
    private $plural_name;
    private $post_type_name;
    private $slug;

    public function __construct($singular_name, $plural_name, $post_type_name, $slug)
    {
        $this->singular_name = $singular_name;
        $this->plural_name = $plural_name;
        $this->post_type_name = $post_type_name;
        $this->slug = $slug;

        add_action('init', array($this, 'portfolio_taxonomy'));
    }

    public function portfolio_taxonomy()
    {
        $labels = array(
            'name' => ucfirst($this->plural_name),
            'singular_name' => ucfirst($this->singular_name),
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'hierarchical' => true,
            'rewrite' => array('slug' => $this->slug),
            'show_in_rest' => true
        );

        register_taxonomy($this->slug, 'rl_' . $this->post_type_name, $args);
    }
}